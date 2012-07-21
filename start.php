<?php

Event::listen('404', function()
{
    //return Response::error('404');
    return Redirect::home();
});