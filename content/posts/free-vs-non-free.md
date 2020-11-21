---
title: "Free vs Non Free"
date: 2020-04-26T23:37:04Z
draft: false
toc: false
images:
tags: 
  - linux
---

Today I’d like to breakdown what the differences are between “Free” and “Non-Free” apps in Linux.

#### Free

First of all, the most common type of Linux application is the free type. To be generally classed as free, an app must be open-source and available for anyone to download and install.

This usually means the source code is available for anyone to read and derive from on sites like [GitHub](https://github.com/) or [LaunchPad](https://launchpad.net/), which the source code can then be downloaded and ‘built’ by advanced users into usable program code.

Alternatively, most publishers of ‘free’ apps will also create a ‘package’, like a .deb file, which can be downloaded by the user and installed with a simple double-click or uploaded by the publisher to package managers like APT, so it can be installed nice and easily with a command or two.

#### Non-free

There are a few types of ‘non-free’ app; these apps can be ‘closed-source’ (i.e. the source code isn’t published and is generally unreadable by end-users – for example [Spotify](https://www.spotify.com/uk/)), they can be ‘open-source’ but the license restricts usage unless you’ve paid for the app (for example, [ukuu](https://teejeetech.in/ukuu/)) OR they can be both ‘closed-source’ and licensed for paid use only (for example, every version of Windows).

Generally speaking, open-source apps with paid licenses aren’t a big deal, at the end of the day, somebody had to spend time creating and testing that software, there could be overhead to keep the service running and more involved, etc. So, at least in my opinion, unless an app costs a ridiculous amount of money, it’s not a big deal.

The same is difficult to say for closed-source apps, whether paid or otherwise, as nobody except the publisher can see the code the program uses – it could be doing almost anything.

#### Closing Remarks

The reason I, and *most* (not necessarily *all*) people, use Linux is because it is open-source and community-driven. In practice, this means that there’s no single person or company who stands to gain profit from it. I.e. it’s strongly substantiated now that companies like Microsoft and Amazon gather information about you and sell it to advertisers.

Windows makes this obvious, think about it – why does the setup ask you for permission to set up an ‘advertisement ID’? Windows doesn’t contain any ads by default, so why would they need an ID for you? It’s because they gather info about when you use your computer, what you do with it, which apps you use, and who knows what else to sell to advertisers and gain extra profit.

Even apps like Firefox have been caught sending periodic data to a Mozilla telemetry server, who knows what that contains? I don’t….

I’m going to do a separate post about this one day, but even Ubuntu which was once the most popular Linux distribution by a landslide has slipped into 3rd place at the time of this post, behind Linux Mint and Debian. Any guesses why? [Canonical](https://canonical.com/), the company behind Ubuntu, have been caught selling user’s data to Amazon in the past and have (**allegedly**) stopped since being caught.

They were also caught trying to lock Ubuntu into a little software suite they tried to push called UbuntuOne quite some years ago, by removing competitor apps from their curated Ubuntu Software Store and Snap service. Quite the shady move, don’t you think?

That brings us quite nicely into the Snap project. Snap’s backend (i.e. the servers that contain the repositories, sign-in protocols, etc) is all closed-source and managed by Canonical **ONLY**. This means Canonical *could* collect usage data, curate packages allowed on the project and more. With their history, who’s to say they aren’t?

That’s all for now, I’ll see you soon with another update!