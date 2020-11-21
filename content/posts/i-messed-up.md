---
title: "I Messed Up"
date: 2020-05-13T19:01:13Z
draft: false
toc: false
images:
tags: 
  - linux
---

So, it turns out the software on my new PC was a house of cards… All it took to destroy basically all of it was a small nudge. Let’s discuss what I did wrong, and how you can avoid it.

First of all, you’ll need to understand my dual-boot setup, and I describe that over [here](/posts/its-been-a-while/). If you don’t read that section (under the heading *Operating System*), this post won’t make sense to you.

So what did I do wrong? Well, quite a bit, actually. When I first installed a Linux distro, I chose LMDE, like I always do. But LMDE didn’t appreciate my Nvidia GPU and booting to a disk formatted with BTRFS. So I decided to switch back to standard Mint instead.

But what I didn’t do was format the ESP partition to clear it out. So, as far as my UEFI thought, I still had LMDE installed – you’ll see why this sucked in a moment.

---

So, I installed Linux Mint standard and everything went well. Then, I moved on to installing Windows 10. This is where things *really* went down south.

So, for one reason or another, my motherboard has the **stupidest** feature – or perhaps “feature” is a better description. You don’t need to enable legacy boot in the settings, like with most UEFI’s. Instead, there’s a “system” of some sort, that allows you to boot to legacy disks *directly* via the boot override menu, so long as either 1) It’s on an *external* disk like a USB **or** 2) There’s no other UEFI mode disks on the system.

As you may have guessed, I installed Win10 from a USB, see where I’m heading? I accidentally booted to the USB in *legacy* mode, and thus Win10 installed in legacy mode, too. This wasn’t a problem initially, as GRUB booted the legacy disk without any complaints, but my motherboard wouldn’t, which would become a problem.

At some point, I was trying to tweak GRUB to get something working the way I wanted, I think I was editing files to prevent GRUB from overriding my settings. Doing so, however, broke my GRUB install. So at this point, I couldn’t boot Linux and my GRUB wasn’t working to boot into Windows that way, so I tried to boot Win10 directly from my UEFI by using the boot menu. But it wasn’t working, it kept skipping the Windows disk *entirely* and going back to the Linux disk. No errors were shown which was very cofusing.

So, at this point, I have a new machine, and neither of my OS’s are booting. Uh oh :confounded: I started by reinstalling Linux, as I hadn’t installed all my programs and transferred all my files yet, anyway. So I reinstalled Mint and GRUB worked again – but now Windows 10 didn’t show up in the menu. No matter what I tried Win10 **would not** come up, but all my files were accessible via Linux so I know the disk didn’t go bad.

I’m still not sure exactly why Win10 wouldn’t boot at this point, but nonetheless it wouldn’t. So I eventually realised that all my games (large downloads) were installed on the extra 1tb SSD, which I could just leave untouched during the installation. Which meant I didn’t need to re-download them and made reinstalling Win10 not a big deal so I decided to cut my losses and reinstall it. I realised it used to be installed in legacy mode at this point, because I had to reformat the disk to the new GPT style, which is required for UEFI but incompatible with legacy BIOS systems.

After a few hours of Windows updates (btw, Microsoft, please for the love of all things gamer, sort out updates & **especially** the Microsoft store), everything was restored. The only trace of there ever being a problem now is that my extra 1tb SSD doesn’t support apps from the store now because the old apps are still on it & it won’t let me delete the folders.

So, be careful when installing OS’s, I guess :laughing: And watch out for motherboards with stupid features.