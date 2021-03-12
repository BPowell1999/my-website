---
title: "Why All 'Best Linux Distro' Articles Are Wrong"
date: 2021-03-12T03:00:28Z
draft: false
toc: false
images:
tags: 
  - Linux
---

Hey everyone,

Today I'd like to talk to you about all those "Top 10 Linux Distro's in 2021" articles and their likeness.

I'll get straight to it, they're **wrong**. No Linux distro is good at 'everything' because that simply isn't possible. Some distro's are good for beginners, like Linux Mint, others are good for elitists who want control over every *individual* package and setting on their system like Arch Linux.

Every person wants and needs different things from their system. Therefor, the only way to **truly** get the best distro *for you* is to build one for yourself from a minimal base like Debian, or even Arch if you want a true ground-up experience. As someone who's recently built up a system from a Debian 10 base, I can honestly tell you it isn't particularly easy. You need to be prepared to invest a lot of time into installing & configuring packages and trying to make sense of error messages as helpful as "There was an error" (*Seriously tho, this is __sooo__ unbelievably annoying and useless*).

That isn't to say it can't be done, and don't be discouraged - the results can be amazing. For the rest of article, I am going to be talking about Debian-based systems, because Arch is fundamentally different in several ways and quite frankly, the community surrounding Arch is probably the most toxic of all Linux distributions. See ['The dark side of Linux'](/posts/dark-side/#communal-toxicity) for just one example.

Building your own Debian-based system offers several advantages (and some disadvantages);

## 1. Stability

Debian is one of the longest-running Linux distributions available today. The stable branch of Debian (currently version 10 codenamed "Buster" when writing) is famously rock-solid. All packages are 'frozen' at the time of release, and only security updates are issued. This means that all of the packages available are tested and certified to play nicely together, at least with their default settings. However, it also means that unfortunately, some packages can be outdated - massively in some cases. This is somewhat mitigated by the fact that the packages in the official repositories are all frozen at the same time, meaning that dependencies don't usually get broken in the official repositories and also the release of security updates, meaning any security problems can be patched without needing to wait until the next release for them, but it can still be inconvenient if you're trying to install .deb files from the internet - they may require newer versions of software than are available in the stable branch.

## 2. Set and Forget

As strange as it sounds, 9 times out of 10 with Debian, once you've got everything running the way you like, you can pretty much just sit down at your computer and get to work without needing to tinker very often at all because there's no new versions of packages to break things or updates to overwrite your settings and so on - if you turn your computer off on a somewhat-regular basis (e.g. at night), you can even take this philosophy one step further by setting up automatic security updates in the background. With this approach, you could theoretically avoid the command line for **months** at a time.

## 3. What you want - no bloat, no compromises

When you build your own system, it's easy to avoid extra packages you don't want - just don't install them in the first place! Similarly, you can install packages to do anything and everything you want. There's no-one to make weird rules which prevent a specific app or collection of apps from working on that distro.

This also has some unexpected side-benefits - for one, customised Debian systems *tend* to boot noticeably faster than off-the-shelf distro's. For example, my machine used to boot Linux Mint in around 9 seconds (which is quite long in the Linux world, to be fair) whereas my new Debian system boots faster than I can measure it (which means less than 3 seconds) - **that's 3x faster**.

## 4. Tailored to your system

On a general level, having your own Debian-based system means you can pretty easily tweak the settings of your installed packages to 'mesh' nicely - different combinations of hardware can cause weird and wonderful interactions sometimes so most distributions choose a conservative approach - often prioritising *breaking* as few systems as possible over making as many as possible work.

The option also exists with Debian to only install the drivers you need for your system as it is at the time of installation - although I actually chose *not* to opt-in to this personally and I recommend you don't either, because when it says 'Needed drivers only', it **really** means it. Losing hardware to the great beyond or swapping anything out without pre-loading the drivers can leave you in a world of hurt. But, if you really need those few hundred megabytes, the option exists for you.

---

I've been using a Debian-based system like this for a few weeks now. It took me around 4 hours to get it to a stage I'd consider *functional* (with all my regular apps installed, backups configured, most major settings configured & so-on), then just under 2 weeks of occasional tinkering to get things to a rock-solid stable configuration exactly how I liked it all. If I'd dedicated time to it rather than tinkering every now and then I probably could've had it done in a few days.

My system is perfect for me now because it's stable, it features Kernel-mode Virtual Machines (KVM) that perform *very* well and (crucially) don't crash my computer like sometimes happens with VM's in other distro's, it's got Ice from [Peppermint OS](https://peppermintos.com/) installed which enables web-apps, it boots crazy fast and it works **great** on my system - I don't get weird delays or errors in the startup or shutdown process, VPN connections can be enabled at boot without needing to write complicated scripts and I can just generally work without needing to worry about my OS.

---

Thanks for reading my post! If anyone actually wants to see it, I'll create a YouTube video showing how to create a basic Debian system and how you can build it out into your own system. See you soon!