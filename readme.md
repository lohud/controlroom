Lohud Traffic "Control Room"
==============

App currently pulls from 511NY api and caches some images (from ny.thruway.gov, similar to our Traffic Cam map app). A php script that queries the api, caches images and writes to newcams.json is still required


Project code
==============

Project uses Zurb's Foundation as a base, with tweaks to incorporate some of Google's Material Design ideologies into the design.

What's working
==============

App itself now pulls cameras fine and is responsive.

What's NOT working
==============

~~App currently makes two separate calls and pings 511NY's api far too often. Also there's little need to constantly check for updated cameras as that rarely (if ever) changes.~~

To-do
==============

* ~~Fix API calls instead of constant-pinging~~
* Create alerts for traffic/weather emergencies
* ~~Turn off writing camera roadway json~~


Contributors
==============

* Jun-Kai Teoh (@jkteoh)
* Jesse Hazel for troubleshooting help (@jessewhazel)

