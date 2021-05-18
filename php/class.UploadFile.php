<?php

class UploadFile
{
    protected $c;
    protected $url = 'http://musicchild.srve.io/api/Insert.php';
    protected $post = [];
    protected $opt;
    protected $result;

    public function __construct(){
        $this->c = curl_init($this->url);
    }

    public function setPost($post)
    {
        $this->post['file'] = $post;
    }

    public function setOpt()
    {
        curl_setopt_array($this->c, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER=> 1,
            CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => $this->post
        ]);
    }

    public function send()
    {
        $this->result = curl_exec($this->c);
        curl_close($this->c);
        return $this->result;
    }
}
