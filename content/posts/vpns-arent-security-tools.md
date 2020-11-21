---
title: "VPNs Aren't Security Tools"
date: 2020-08-27T22:33:01Z
draft: false
toc: false
images:
  - /images/vpn-graphic.png
tags: 
  - untagged
---

![Crude VPN diagram](/images/vpn-graphic.png)

Hey everyone! Today I want to discuss something that’s cropped up a bit for my lately as I’ve been doing security-focused research for and work on my webserver.

I’ve learnt a lot of things, thanks in no small part to a premium membership with [Alison Courses](http://alison.com/), today I want to share some of that knowledge with you – VPN’s **are not** what people make them out to be.

---

Before I can delve into *why* that is, I need to explain briefly what a VPN is and how it relates to the internet. A keyword you’ll come across in this article is IP (internet protocol) address, much like a postal address, an IP address helps your data to navigate the World Wide Web and arrive in the right places. I’ve created a crude but good-enough graphic and posted it on top of this page for a visual demonstration.

VPN stands for Virtual Private Network, and what they do is “shield” the data coming from your computer, and they do this by “encrypting” it. Essentially, they take a really long string of letters & numbers, usually 256 characters long *or more*, called a **key** and they do a special mathematical calculation which can effectively* only be done 1 way. It’s important to note here that your IP address (and other metadata like it) aren’t encrypted, only the data for the website at the other end of the connection is. Otherwise, your data would never be able to reach that website.

This calculation is called a *hash*, and it’s a special calculation that’s easily done by a computer to produce “scrambled” data, but it would take centuries, decades at best, to do the other way and calculate the key from the scrambled data. Combine this with the fact that these keys are changed often by VPNs, and that essentially means that decrypting VPN data without the key is functionally impossible.

However, what nobody tells you is that websites themselves do this, too. Think about it, your bank doesn’t want anyone to get hold of your details, do they? Most modern websites (including mine) use similar technology to achieve the same goal. Those that don’t aren’t websites that you should send your data to, anyway.

So, at best, the commonly cited use-case for VPNs which is when using public WiFi is just flat wrong, it doesn’t provide any additional practical security over just connecting to a website like normal. At worst, it can be detrimental to your experience in the form of introducing a bottleneck that slows your connection down when it would otherwise be fine.

---

However, it’s not **all** bad with VPNs, they *do* have a use (somewhat), but it’s not security. Consider this, I said the VPN’s special key scrambles your internet data, which it does, so how can websites on the internet read this information? Well, they can’t.

Let’s check back at the diagram above the post, you’ll see that the connection is only encrypted by a VPN on the *network* side, not the *internet* side. That’s where the ‘network’ part of the name comes from.

The way your connection to a website works when using a VPN is as follows;

1. Your device encrypts (scrambles) the data it sends *twice* and sends it onto the network
2. Your data finds it’s way to your VPN
3. Your VPN decrypts (unscrambles) the data *once* and changes the IP address in the metadata – your data now looks like it’s come straight from the VPN, nobody can tell it came from you except the VPN itself
4. Your data is forwarded to the internet and navigates to the intended website
5. The website’s server receives the data, decrypts it again and then processes it. If it’s a password, they’ll check it, if it’s a request to your bank do a bank transfer for you, they’ll do it, etc.

Take note of step 3: your VPN swaps the IP address of your data. Let’s look at it this way, imagine you pay someone some money every month to have *your* letters sent to *their* house, and have them change the address label and forward it to you. To all of the companies who send you letters, as far as they know, you actually live at your friends’ house.

By doing this through a VPN, you can connect to a service’s website as if you were in whatever country that VPN is located in. This can used with services like Netflix to circumvent their licensing restrictions in some countries, in theory. In practice, however – services tend to be quick to figure out ways to block a particular VPN.

That’s all I have to say today :smile: See you soon for my next post and remember to stay safe out there!

---

P.S. Just a quick footnote for all of the tech-savvy people who read my blog, there are plenty of over-simplifications and topics I skipped entirely in this post for the purposes of simplicity and concise writing. That doesn’t take away from the factual accuracy of what I discussed today – this a post designed to explain the basics of the *concept*, **not** lecture computer science and digital security.