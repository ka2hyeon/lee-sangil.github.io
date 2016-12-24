---
layout: single
title: How to dim a LED for Human Perception
header:
  image: blog/dimLED/expDimming.png
---

There are a lot of webpages describing the actual process of dimming a LED light using Pulse-with Modulation (PWM). The general idea is to switch the LED completely on and of at a high frequency (in the range of kHz) so that you eyes cannot see the actual on or off state anymore. By varying the so called duty cycle (the percentage of on-time within one cycle of the dimming signal), we can create the perception to our eyes, that the LED is less bright than full on but also not completely off – depending on the duty cycle. Clearly a duty cycle of 100% means the LED is completely on where as 0% mean the LED is off.

{% include base_path %}

![Pulse-with Modulation]({{ base_path }}/images/blog/dimLED/dutyCycle.png "Pulse-width Modulation")

Now say you want the LED to dim from 0% to 100% and back down to 0% linearly – i.e .the increase in brightness should be linearly increasing (and then decreasing) with the time passed. To make this happen we can simply increase (and then decrease) the duty cycle linearly.

![Linear Dimming]({{ base_path }}/images/blog/dimLED/linDimming.png "Linear Dimming")

This will give us a linear increase/decrease in light output BUT this will not result in a perceived linear increase/decrease of the light. This is due to the [Weber-Fechner law](https://en.wikipedia.org/wiki/Weber%E2%80%93Fechner_law). For light perception, this law describes the observation that the our eyes perceive light in a logarithmic way. So this is approximately what we are observing:

The Weber-Fechner law thus implies, that if we have to increase the light output of the LED exponentially (and not linearly) to achieve the perception, that the light is increased linearly! Hence:

![Exponential Dimming]({{ base_path }}/images/blog/dimLED/expDimming.png "Exponential Dimming")
