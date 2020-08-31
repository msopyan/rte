<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Google Text To Speech Library
 *
 * A simple library to use the unofficial Google Translate API
 * to create a Text To Speech audio file
 */

class TextToSpeech
{

    private $text;
    private $audioFile;

    public function setMessage($text)
    {
        // Google Translate API cannot handle strings > 100 characters
        $text = substr($text, 0, 100);
        $text = urlencode($text);
        $this->text = $text;
    }

    

    public function createMessage($fileName = '')
    {
        if( empty( $fileName ) ) {
            $fileName = date("Ymd_His_tts");
        }

        $this->audioFile = $fileName . ".mp3";

        $text_len = strlen($this->text);
        $url = 'http://bhskita.dynu.com:8990/api';
        $url .= '&textlen=' . $text_len . '&tl=' . '&q=' . $this->text;

        $mp3 = file_get_contents( $url );

        return file_put_contents( $this->audioFile, $mp3 );
    }

    public function getAudioFile()
    {
        return site_url($this->audioFile);
    }

    public function getEmbedAudio($autoplay_status = FALSE)
    {
        $autoplay = ($autoplay_status)? "autoplay='autoplay'" : "";

        $result  = "<audio controls='controls' " . $autoplay . ">\n";
        $result .= "<source src='" . site_url($this->audioFile) . "' type='audio/mp3' />\n";
        $result .= "</audio>\n";

        return $result;
    }

}
