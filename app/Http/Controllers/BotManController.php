<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * ChatBot logic here.
     */
    public function handle()
    {

         $botman = app('botman');
         $botman->hears('{message}', function($botman, $message) {
         if ($message == 'hi' OR $message == 'hey' OR $message == 'hello' )
          {
            $this->askName($botman);
          }elseif ($message=='hey chamate'){
            $botman->reply("hey wassup");
          }
          elseif ($message=='how old are you?'){
            $botman->reply("bata pa ko kol");
          }
          elseif ($message=='how long is your dorado?'){
            $botman->reply("kabangang ruler");
          }
          elseif ($message=='what u doin'){
            $botman->reply("im comingggggg");
          }
          elseif ($message=='hehe'){
            $botman->reply("mapriso ka");
          }









       });

       $botman->listen();

    }

      /**
       * Chatbot logic here.
      */

      public function askName($botman)
      {

          $botman->ask('Hello! What is your Name?', function(Answer $answer) {
          $name = $answer->getText();

          $this->say('Nice to meet you '.$name);
        });

       
      }



      
  

     
}