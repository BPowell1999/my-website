---
title: "My Final Choice Of Linux Distro"
date: 2020-04-07T19:09:21Z
draft: false
toc: false
images:
tags: 
  - linux
  - me
---

Hi guys! I discussed in [one of my recent posts](/posts/me-and-linux/) that I was ‘on-the-fence’ between two Linux distros that I often use. You should read that before this post, by the way! Or some of it won’t make sense. You just need to read below the last dividing line if you prefer, I know that post is kind of long :scream:

Well, I’ve now decided definitively. Linux Mint Debian Edition is the OS that I’m going to use for a while instead of Arch Linux, and here’s some reasons why:

### 1 – Complexity

At the end of the day, I’m **not** a Linux expert. I’ve been using Linux for about a year now ( plus a few months, years before that but I’d forgotten most of what I learned by the time I came back :laughing: ) and Arch is a little bit beyond my knowledge.

I always found myself googling every little problem I had because I’m not that experienced with Linux in general, let alone Arch – and I made a lot of **disastrous** mistakes. One occasion I don’t think I’ll forget any time soon is when I was working with the /var directory on my test server before I switched my company over to it, as I was trying to copy it to `/mnt/newvar` which was an encrypted additional drive as I wanted a few of it’s sub-directories encrypted (specifically `/var/www/webdav/`, `/var/lib/mysql/` and `/var/backups/website`) and I didn’t have enough drives to encrypt them all separately so I decided to encrypt all of /var (I know you Linux veterans are cringing right now but it’s the best option I had – the test server was a Raspberry Pi 3 and I’m not sure how to resize the default Raspbian Lite partitions).

I was cd’d into `/var` (which in case you don’t know, `cd` makes ‘.’ represent the directory you are cd’d into). After I’d copied all the files properly, the plan was to do `rm -r ./*` which would delete everything in the `/var` directory and let me mount the encrypted counterpart in it’s place *(which, I know I should’ve renamed the original directory to something like /var_old instead but I was strapped for time and in this case, that wouldn’t have helped anyway).*

What actually happened was I missed out the ‘.’ by accident, so the command was `rm -r /*`. Such a simple mistake, with such **disastrous** consequences. By the way, in case you need to be told this, **DO NOT TRY THAT COMMAND ON YOUR LINUX PC!!!!!!** If you don’t know what that command will do and you really have to try it, at least do so using VirtualBox! You have been warned….

But you get the idea, for someone who’s inexperienced and prone to making mistakes like that, Arch Linux is a minefield. Constantly having to tweak config lines hidden away with thousands of others in the same file, which is itself hidden deep in the filesystem and often requiring root privileges to edit, there’s a lot that could go wrong with Arch and troubleshooting is a long and difficult process you end up needing to endure quite often. Being on the bleeding edge with the latest drivers and program updates isn’t always a good thing.

Linux Mint is much simpler, in comparison. Most tasks can be done via the GUI and some regular users might never even see the command line. There are tools built-in to help you troubleshoot and repair problems, the diagnostic information in errors and logs tends to be easier to understand, and it actually has an installer, which Arch does not. If you just want a system that ‘just works‘ and you aren’t bothered about bleeding-edge updates and a gigabyte or so smaller installation then Linux Mint really is hard to beat.

In Linux Mint 19.2, one problem that I would personally consider quite major was the lack of support for AMD graphics cards. You often had a black screen when booting 19.2 and earlier with AMD graphics which is why I explored Arch in the first place. You had to press tab at the right time during the boot sequence and add ‘NOMODESET’ to the right line in a config file and then press F10 just to boot your newly installed OS. It was a hastle. And you’d have to do that every boot until you downloaded AMD’s driver from online. That’s no longer a problem as of 19.3 because with Linux Mint moving to Kernel 5+ in that version, the AMD drivers are now embedded in the kernel itself, so there’s no need to install anything.

### 2 – GUI Controls

But you get the idea, for someone who’s inexperienced and prone to making mistakes like that, Arch Linux is a minefield. Constantly having to tweak config lines hidden away with thousands of others in the same file, which is itself hidden deep in the filesystem and often requiring root privileges to edit, there’s a lot that could go wrong with Arch and troubleshooting is a long and difficult process you end up needing to endure quite often. Being on the bleeding edge with the latest drivers and program updates isn’t always a good thing.

Linux Mint is much simpler, in comparison. Most tasks can be done via the GUI and some regular users might never even see the command line. There are tools built-in to help you troubleshoot and repair problems, the diagnostic information in errors and logs tends to be easier to understand, and it actually has an installer, which Arch does not. If you just want a system that ‘just works‘ and you aren’t bothered about bleeding-edge updates and a gigabyte or so smaller installation then Linux Mint really is hard to beat.

In Linux Mint 19.2, one problem that I would personally consider quite major was the lack of support for AMD graphics cards. You often had a black screen when booting 19.2 and earlier with AMD graphics which is why I explored Arch in the first place. You had to press tab at the right time during the boot sequence and add ‘NOMODESET’ to the right line in a config file and then press F10 just to boot your newly installed OS. It was a hastle. And you’d have to do that every boot until you downloaded AMD’s driver from online. That’s no longer a problem as of 19.3 because with Linux Mint moving to Kernel 5+ in that version, the AMD drivers are now embedded in the kernel itself, so there’s no need to install anything.

### 3 – Stability

Okay, sure, Arch can be as stable as a rock if you keep updating via the command line and you watch the Arch Wiki RSS feed for warnings about upgrades, manual interventions, etc. But go away for a month-long holiday and leave your Arch system untouched, I dare you! You’ll have some fun when you get back.

The advantage of Mint’s x.y release system is that, you mainly only receive security updates. Feature updates normally wait until the next ‘point’ release or even the next respin. For those who aren’t sure, a respin is updating from 18.y to 19.y, for example, and x.1 to x.2 is an example of a point release.

This way, sure you have to wait quite some time for a new feature, but when you do get it, it’s a lot more likely to work than it was with Arch months earlier. This is because the Linux Mint Foundation do most of the configuration for each point-release and respin, which helps to ensure the packages work well together and on a wide range of hardware straight out of the box.

Arch, on the other hand, just ship it however the author happened to publish it. It might work on lots of systems or barely any. It depends on the developer, your hardware and sheer dumb luck sometimes.

### Closing Remarks

So that’s my decision. Arch is good for something like a server, where you don’t need a GUI and getting updates quickly (especially security ones) is important, and you know exactly what’s on your server and your probably a more advanced user anyway if you’re making your own server, but, in general, LMDE is the way for me.

### Why Debian Edition?

You may notice, in a lot of those sections I refer mainly to Linux Mint 19.3, but I chose LMDE 4, what gives? Well, Ubuntu. LMDE 4 and Linux Mint 19.3 (Ubuntu based) are so comparable these days, but I don’t like Ubuntu. You can get a glimpse of why in the closing remarks of [this post](/posts/free-vs-non-free/#closing-remarks). But, to give you a quick run-down, Canonical, the company behind Ubuntu have made plenty of bad business decisions. Some of which go against the very idea that the Linux community stands for and some are even downright privacy breaches. Search Google for ‘[Ubuntu Amazon Spyware](https://www.google.co.uk/search?q=Ubuntu Amazon Spyware)‘ and see for yourself.

The main feature that’s missing from the Debian Edition is PPAs, because that’s another Canonical propriety software. That’s not a big deal, though. Most PPA authors also publish their source code on GitHub, so all you need to do really is find the GitHub page and follow the instructions to install it. Just remember to bookmark it & check back every 3-6 months for an update – works well enough for me.

With that said, I think I’ve strained your eyes enough for today :laughing: Check back soon for more posts and updates!