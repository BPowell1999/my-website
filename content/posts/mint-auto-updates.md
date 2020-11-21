---
title: "How To Enable Auto Updates In Linux Mint"
date: 2020-06-19T23:41:29Z
draft: false
toc: false
images:
tags: 
  - quick-tips
---

Not everyone wants to have to manually update their system all the time – we all know how often Linux updates and some people don’t want to bother, some people just want to sit at their computer, get their work done and have their computer just work.

If you’re like me, and this sounds tempting to you, today I’ll show you how you can set up Linux Mint to update all by itself!

**IMPORTANT NOTE**: You should make *absolutely* sure that Timeshift is creating automatic snapshots on your system before you follow this guide! If your computer tries to update automatically but something goes wrong, a snapshot will save you a lot of headache!

To enable automatic updates in Linux Mint (works on versions 19.* and 20.*) all you need to is open the update manager using the shield icon usually in the bottom-right of your screen near the time.

Inside the update manager, you’ll need to click ‘Edit’ in the top-left of the update manager, then ‘Preferences’ inside the list that appears. You’ll then see this screen:

![Update Preferences](/images/mint-auto1.png)

Inside this screen, press ‘Automation’ from the three buttons along the top of the Preferences screen and you’ll see this:

![Automation](/images/mint-auto2.png)

I always recommend that anyone using Mint enables the “Remove Obsolete Kernels and Dependencies” option unless they have a specific reason not to, as it saves a surprising amount of space on your system especially as Linux Mint spends more time on your system and updates leave old packages no longer required and installs new kernels. This effect is amplified even more if you often install & uninstall software.

To enable either option, or both, simply click it’s slider. Mint will ask for your password and then you’ll have auto-updates enabled! Congratulations!