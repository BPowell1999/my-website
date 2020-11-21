---
title: "It's Been a While"
date: 2020-05-02T18:56:55Z
draft: false
toc: false
images:
tags: 
  - me
---

Hi everyone, I’d like to apologise that it’s been a while since I last posted. I now have a temporary job at a warehouse for an online retailer, kinda like Amazon. To say I’m not used to that type of work would be an understatement :laughing:

I’ve also built a new computer – that is going to be the primary focus of this post. It’s tiny, and it’s a monster! Here’s a quick parts list:

- Silverstone SG13 mini-ITX case
- Asus Prime H310I+ motherboard
- Intel Core I5 9400F (yes – you read that right!)
- Low-profile LGA1151 CPU cooler from Arctic
- 16GB 2666mhz DDR4 memory
- PNY compact GTX 1660-TI
- Aerocool Integrator 500W power supply
- 120GB SSD for Linux storage
- 480GB SanDisk SSD+ for Windows boot/apps
- 1TB Samsung EVO SSD for games storage

Before we go any further, *I know* some of you just had an aneurism because it’s 2020 and I picked an Intel CPU (and **deliberately** at that!). So let me explain that, and some of the other parts choices.

## Intel CPU in 2020? Are you mad?!

Well, in many ways yes :laughing: But that’s not why I picked Intel. The reason I choose a Core I5 over something like a 2600x boils down to 2 factors.

### 1 – Efficiency

My mini-ITX case limits the height of CPU cooler available, at least without shelling out an extra £100 for a Corsair SFX power supply and adapter. The smaller the cooler, the less heat it can handle from a CPU.

The only air cooler I could find for the AM4 socket within this height tolerance only supported up to the Ryzen 1600x or 2600 non-x, meaning I’d have to downgrade the CPU I wanted (2600x) and have no upgrade path, shell out for a Corsair SFX PSU or risk an AIO cooler.

I’ve had 2 Corsair power supplies before which both died within 2 years, and my dad’s one died within 1 year, and took his motherboard, RAM and SSD with it. So, Corsair as a brand were totally out of the picture for me, and I couldn’t find any other brand SFX PSU’s.

Plus, my ITX rig is going to be moved a lot. It’s not a ‘portable’ rig as such, but it’s going to moved every few weeks throughout it’s life. This can put a lot of strain on the lines. The motherboard in this case also sits horizontally, so any fluid would go all over the motherboard. No thank you.

Also, water in a computer, especially an £800 one – I’d never sleep again knowing that thing has water in it waiting to ruin everything at any moment. Finally, AIO’s aren’t cheap, and this rig was getting expensive enough.

### 2 – Component availability

I’m not sure if this is just due to COVID-19 or a general problem, but mini-ITX motherboards for AM4 are kinda scarce, and those that are available seem to be expensive.

So considering all the factors, the availability, the upgrade paths, my ability to sleep, and of course price – I decided Intel was the best choice *for my particular needs*.

## Why that particular case?

The SilverStone SG13 might be one of the cheapest mini ITX cases on the market, but don’t be fooled! It has a few tricks up it’s sleeve…

Before we get into that, let’s get one thing straight – this case is not for everyone. It’s designed to be functional, not pretty. There’s no glass or lighting, just metal and vent holes.

First (and probably most influential), you only really need a ‘mini’ motherboard – almost all other components like the power supply and graphics card can be fairly standard-sized. The GPU specifically can take up the entire length of case thanks to the case’s design. There’s even a cutout in the case frame so that the GPU can protrude forward into the mesh front of the case, allowing graphics cards that are technically longer than the case itself. SilverStone seem to have designed the case to be used with AIO’s, as it’s all over their marketing – but I would never use a water cooler in my PC.

Second (and probably most controversially), I wanted a case that didn’t have any windows, as mini ITX makes cable management difficult and ugly, plus I didn’t want lots of lights in my system. Basically all lighting utilities use Windows-only software, and revert to defaults when using other OS’s.

## Operating System

You may have noticed I’ve got 3 SSD’s in this system, 2 earmarked for Windows and 1 for Linux. What’s the setup here?

For this explanation, I’m going to refer to the various SSD’s as follows:

1. Linux *storage & boot*
2. Windows *boot & apps*
3. Windows *game storage*

Firstly, I installed Windows 10 as normal onto SSD #2, just a regular Windows installation with a Microsoft account, nothing fancy.

Next, I installed Linux Mint (standard edition, not Debian) normally on SSD #1, with GRUB installed to the boot sectors of the same disk, like most Linux installations. I originally tried Debian edition, but getting it to work with my newer Nvidia GPU and BTRFS was an incredible faff. It was much easier with the standard edition, so I folded and chose that.

*NOTE: I’m going to do a separate post on what BTRFS is, it’s advantages and how to use it soon!*

Then, I came to UEFI configuration. I disabled booting to SSD #3, as it doesn’t contain an OS, just my Origin, Steam and uPlay libraries. SSD #1 is prioritised, becuase it contains GRUB which can boot to Linux or Windows – however, should there be some kind of problem booting from SSD #1 it will boot to SSD #2, which brings up Windows but doesn’t offer any chance to boot into Linux.

Finally, GRUB needed to be configured. The config I’ve chosen is a little unusual. When GRUB is loaded, it will read from the Linux filesystem which boot option I chose last time (i.e. Windows or Linux), and assume I want that again. It doesn’t show the boot menu at all unless I press escape to bring it up, within 2 seconds of the system loading GRUB. This means I can reboot Windows or Linux and they ‘directly’ reboot. There’s no boot menu constantly harassing me.

I also enabled hibernation in both Windows and Linux, which means I can set one to hibernate and reboot into the other to do something, then reboot back into the original OS and continue what I was doing.

For an ITX case with air cooling, the temperatures are very reasonable, at 30 degrees (c) for the CPU at idle and around 50 under load, while the GPU has a similar idle temp and reaches high 60s / low 70s under load. Very reasonable for an ITX air-cooled chassis with only 1 active intake fan.

Combined with my 75hz FreeSync monitor, the gaming experience on this setup is absolutely incredible.

That’s about all about my PC for now. If you wanna know more about it, let me know!