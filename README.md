twitteroauth-codeigniter
========================

Twitter Codeigniter OAuth Implementation

This is basically a Codeigniter Implementation of the Twitter Auth library.

Getting Started
===============
1. Create your basic CodeIgniter Application (Make sure the basic app runs - this will help in conducting tests).
2. Copy and paste the js, css, images into your (in your CodeIgniter app) assets directory (we named ours "www" because we were bored).
3. Go into "Applications" directory and copy the files from "Controllers", "Libraries", and "Views" into your CodeIgniter application.

Usage
=====

Twitter Application Configuration.
---------------------------------

This process is straightforward and you should have a set of keys within a few minutes.

1. Visit https://dev.twitter.com/apps/ and sign in using your Twitter username and password. This doesn’t have to be the username or password of the stream you need access to, just a Twitter account you control.
2. Select "Create new application" and enter the application details.<br/>
 2.1. The name and description can be anything you like really, but you can’t use "Twitter" in the name.<br/>
 2.2. The website field can be your main website and doesn’t have to be the site where your Twitter feed or feeds are located.<br/>
 2.3. Callback URL can be left blank.<br/>
3. Enter the CAPTCHA info and click create.
4. On the next details screen, click "create my access token". You may need to refresh the page after a few seconds if it doesn’t appear automatically.
5. Make a note of the Consumer key, Consumer secret, Access token and Access token secret as highlighted below.

NB: The instructions listed above, have been copied from "http://www.webdevdoor.com/php/authenticating-twitter-feed-timeline-oauth/".

CodeIgniter Application Configuration.
-------------------------------------

6. Use the credentials you've obrained (via creating your Twitter application) and supply in the following file "Application > Controllers > Test.php".

<code>
 $twitteruser = "twitterusername";<br />
 $notweets = 30;<br />
 $consumerkey = "12345";<br />
 $consumersecret = "123456789";<br />
 $accesstoken = "123456789";<br />
 $accesstokensecret = "12345";<br />
</code>

7. Depending on how you've setup your CodeIgniter Application, go to your browser and type the following: "http://myapp/test" or "http://myapp/index.php/test" (This instruction assumes that you have basic knowledge of how to setup a virtual host on Apache)
8. That't it! You're now Ready to test your app.

NB: Keep in mind that line 21 of the "www > js > twitterfeed.js" has to be changed to point to your controller (If you decide to change it from test to something else --> This is expected of you AND you'd be a noob to go live with test stuff).

Special Thanks To
=================
Abraham Williams
https://github.com/abraham/twitteroauth

