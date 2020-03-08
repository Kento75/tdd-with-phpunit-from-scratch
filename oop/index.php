<?php

class Video {
  private $type;
  private $duration;
  private $published = false;
  private $title;
  private $playStatus = false;

  public function __construct($type = 'mp4', $duration = '08:30', $title = 'default')
  {
    $this->type = $type;
    $this->duration = $duration;
    $this->title = $title;
  }

  public function setPublished($state)
  {
    $this->published = $state;
  }

  public function getPublished()
  {
    return $this->published;
  }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


  public function play()
  {
      if($this->getPublished()) {
        $this->playStatus = true;
        return "this video is playing";
      }
      return "this video is not yet available";

  }

  public function pause()
  {
    return $this->published ? "the video is paused" : "";
  }

  public function __destruct()
  {
    var_dump('Destructing ...', $this);
  }
}

//header('Content-Type:text/plain', true);

$introduction = new Video('mp4', '10.30', 'Introduction to OOP');
$introduction->setPublished(true);
echo $introduction->play();