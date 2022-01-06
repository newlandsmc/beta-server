# SemiVanilla MC

Thie repo contains the configs for the TEST server.

Differences between servers while testing are, of course, necessary. But they should either be implemented in prod or reverted, not left in test forever (causing drift). **This server should be kept identical to the production server at all times. Drift is important to avoid.**

There are a few necessary changes to make the test server work on different hardware and identify itself as the test server.

If this is used for deploying a new copy of the server - jars will have to be re-downloaded! [Server wiki](https://github.com/SemiVanilla-MC/wiki) listing active plugins and server version should be kept updated!
