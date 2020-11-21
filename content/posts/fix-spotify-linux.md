---
title: "Fix Spotify Linux In Linux"
date: 2020-04-08T19:18:56Z
draft: false
toc: false
images:
tags: 
  - quick-tips
  - linux
---

Hi guys! Today I’m going to run through how to install Spotify without any errors, or fix it if you get GPG and/or internet connection errors when trying to download packages. There are a lot of tutorials around about this, but they all use the command line and I want to show you how to use the graphical tools for this one – no command line.

If your Update Manager or Software Manager ever tells you to check your internet connection but you know you’re connected, or your running `sudo apt update` in a command line and see something like this:

> Err:5 http://repository.spotify.com stable InRelease The following signatures couldn’t be verified because the public key is not available: NO_PUBKEY 4773BD5E130D1D45
>
> Error After Installing Spotify

Then you’ve got a problem with your Spotify repository, But don’t worry! It’s an easy fix.

First of all, open up your Update Manager in the system tray (usually on the bottom-right corner of your screen all the time), it’ll have a shield-like icon with either a green tick or a blue circle containing an ‘i’ in the center. Next, go to Edit -> Software Sources.

![Spotify In Linux](/images/spotify1.png)

You’ll be asked for your password, this is just because your making a system-wide change and Linux wants to make sure you have permission, so type it in and continue. Now, click Authentication Keys in the left pane, then finally, click download. You’ll now see a popup like this:

![Authentication Keys](/images/spotify2.png)

Inside that popup, paste in the ‘fingerprint’ 4773BD5E130D1D45, Click OK in the popup to submit the authentication and then click OK again in the blue banner that appears to apply it. If you were just fixing the error, that’s it! Your done. If your installing Spotify, though, go into the Software Manager and download it now from there. You shouldn’t have any trouble!

#### How did I do?

Thanks for reading! This is my first Linux how-to on this blog, I’d appreciate it if you let me know how I did! Were the instructions easy enough to understand? Do you like the GUI-focused style or do you prefer the speed of copy/pasting into a terminal despite the potential risk? Please let me now!

### Update (June 2020)

I’ve found an easier solution to repair an already-existing Spotify installation if needed – simply open Software Sources from the Mint Menu (you can search for it if needed), click ‘Maintenance’ and from the options, just click ‘Add Missing Keys’ and Mint will automatically add Spotify’s key for you!

![Easy way to fix](/images/fix-spotify-update.png)