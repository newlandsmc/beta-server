<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="preload" href="https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrE.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.gstatic.com/s/raleway/v22/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVsEpbCIPrE.woff2" as="font" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="theme-color" content="#222222">
	<link rel="manifest" href="./live-atlas/favicons/site.webmanifest">
    <link rel=”mask-icon” href="./live-atlas/favicons/mask.svg" color="#cccccc">
    <link rel="apple-touch-icon" sizes="180x180" href="./live-atlas/favicons/apple-touch-icon.png">

    <meta name="keywords" content="semi, vanilla, java, minecraft, mc, survival, rpg, multiplayer, map, dynmap, squaremap, pl3xmap" />
    <meta name="description" content="Welcome to SemiVanilla MC! We are a semi-vanilla survival 1.18.1 Java Minecraft server hosting hard difficulty survival with RPG elements and competitive multiplayer. Dynamic map provided by squaremap." />

    <title>SemiVanilla Minecraft Server - Map</title>

    <!-- Remove this if you are using the servers config below -->
    <!-- <script src="./standalone/config.js"></script> -->

    <link rel="icon" href="https://semivanilla.com/assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://semivanilla.com/assets/css/cookienotice.css" />
    <script type="text/javascript">
      function downloadJSAtOnload() {
        var cookie_notice = document.createElement("script");
        cookie_notice.src = "https://semivanilla.com/assets/javascript/cookie_notice.js";
        document.body.appendChild(cookie_notice);
      }
      if (window.addEventListener)
      window.addEventListener("load", downloadJSAtOnload, false);
      else if (window.attachEvent)
      window.attachEvent("onload", downloadJSAtOnload);
      else window.onload = downloadJSAtOnload;
    </script>

    <script>
        window.liveAtlasConfig = {
        	// By default LiveAtlas looks for a dynmap standalone/config.js file
            // This configuration can be used instead to support Pl3xmap installations multiple servers
            // To configure multiple servers, see https://github.com/JLyne/LiveAtlas/wiki/Configuring-Multiple-Servers.
            // servers: {
                // Pl3xmap internal webserver configuration
                // pl3xmap: {
            	// 	pl3xmap: window.location.pathname
                // },

                // Dynmap internal webserver configuration without using standalone/config.js
                // dynmap: {
            	//   dynmap: {
                //     configuration: 'standalone/dynmap_config.json?_={timestamp}',
                //     update: 'standalone/dynmap_{world}.json?_={timestamp}',
                //     sendmessage: 'standalone/sendmessage.php',
                //     login: 'standalone/login.php',
                //     register: 'standalone/register.php',
                //     tiles: 'tiles/',
                //     markers: 'tiles/'
                //   }
                // },

                // Multiple Dynmap servers on external webserver configuration
                // creative: {
                //     label: 'Creative',
                //     dynmap: {
                //         configuration: 'http://dynmap.local/standalone/creative/MySQL_configuration.php',
                //         update: 'http://dynmap.local/standalone/creative/MySQL_update.php?world={world}&ts={timestamp}',
                //         sendmessage: 'http://dynmap.local/standalone/creative/MySQL_sendmessage.php',
                //         login: 'http://dynmap.local/standalone/creative/MySQL_login.php',
                //         register: 'http://dynmap.local/standalone/creative/MySQL_register.php',
                //         tiles: 'http://dynmap.local/standalone/creative/MySQL_tiles.php?tile=',
                //         markers: 'http://dynmap.local/standalone/creative/MySQL_markers.php?marker='
                //     }
                // },
                // survival: {
                //     label: 'Survival',
                //     dynmap: {
                //         configuration: 'http://dynmap.local/standalone/survival/MySQL_configuration.php',
                //         update: 'http://dynmap.local/standalone/survival/MySQL_update.php?world={world}&ts={timestamp}',
                //         sendmessage: 'http://dynmap.local/standalone/survival/MySQL_sendmessage.php',
                //         login: 'http://dynmap.local/standalone/survival/MySQL_login.php',
                //         register: 'http://dynmap.local/standalone/survival/MySQL_register.php',
                //         tiles: 'http://dynmap.local/standalone/survival/MySQL_tiles.php?tile=',
                //         markers: 'http://dynmap.local/standalone/survival/MySQL_markers.php?marker='
                //     }
                // },
            // },
           servers: {
               pl3xmap: {
                   pl3xmap: window.location.pathname
               }
            },

            // These messages are used throughout LiveAtlas and can be translated here
            // If a message you want to translate isn't here, it is likely controlled by dynmap itself
            // see https://github.com/webbukkit/dynmap/wiki/Configuration.txt
            messages: {
            	chatNoMessages: 'No chat messages yet...',
                chatTitle: 'Chat',
                chatLogin: 'Please login to send chat messages',
                chatSend: 'Send',
                chatPlaceholder: 'Type your chat message here...',
                chatErrorUnknown: 'Unexpected error while sending chat message',
                chatErrorDisabled: 'Chat is not enabled',
            	serversHeading: 'Servers',
                worldsSkeleton: 'No maps have been configured',
                playersSkeleton: 'No players are currently online',
                playersTitle: 'Click to center on player\nDouble-click to follow player',
                playersTitleHidden: 'This player is currently hidden from the map\nDouble-click to follow player when they become visible',
                playersTitleOtherWorld: 'This player is in another world.\nClick to center on player\nDouble-click to follow player',
                playersSearchPlaceholder: 'Search players...',
                playersSearchSkeleton: 'No matching players found',
                followingHeading: 'Following',
                followingUnfollow: 'Unfollow',
                followingTitleUnfollow: 'Stop following this player',
                followingHidden: 'Currently hidden',
                linkTitle: 'Copy link to current location',
                loadingTitle: 'Loading...',
                locationRegion: 'Region',
                locationChunk: 'Chunk',
                contextMenuCopyLink: 'Copy link to here',
                contextMenuCenterHere: 'Center here',
                toggleTitle: 'Click to toggle this section',
                mapTitle: 'Map - Use the arrow keys to pan the map',
                layersTitle: 'Layers',
                copyToClipboardSuccess: 'Copied to clipboard',
                copyToClipboardError: 'Unable to copy to clipboard',

                loginTitle: 'Login/Register',
                loginHeading: 'Existing User',
                loginUsernameLabel: 'Username',
                loginPasswordLabel: 'Password',
                loginSubmit: 'Login',
                loginErrorUnknown: 'Unexpected error while logging in',
                loginErrorDisabled: 'Logging in is disabled on this server',
                loginErrorIncorrect: 'Incorrect username or password',
                loginSuccess: 'Logged in successfully',

                registerHeading: 'New User',
                registerDescription: `Enter your username and password, along with your registration code.

                        You can get a registration code by running /dynmap webregister in-game.`,
                registerConfirmPasswordLabel: 'Confirm Password',
                registerCodeLabel: 'Registration Code',
                registerSubmit: 'Register',
                registerErrorUnknown: 'Unexpected error during registration',
                registerErrorDisabled: 'Registration is disabled on this server',
                registerErrorVerifyFailed: 'The entered passwords do not match',
                registerErrorIncorrect: 'Registration failed, please check the entered details are correct',

                logoutTitle: 'Logout',
                logoutErrorUnknown: 'Unexpected error while logging out',
                logoutSuccess: 'Logged out successfully',

                closeTitle: 'Close',
            },

            ui: {
            	// If true, player markers will always be displayed in front of other marker types
            	playersAboveMarkers: true,

                // Whether to enable the player list search box
                playersSearch: false,

                // Use more compact pre-2.0 player marker style
                compactPlayerMarkers: false,
            },

            // Config version. Do not modify.
            version: 1
        };
    </script>

    <style>
        /* Theme colours */
        :root {
            --background-base: #222222; /* Foreground UI elements */
            --background-dark: #121212; /* Body/Splash screen/Shadows */
            --background-light: #363636; /* Scrollbars/inputs */
            --background-error: #771616; /* Errors */
            --background-marker: var(--background-dark); /* Map markers */

            --background-disabled: #555555; /* Disabled controls */
            --background-hover: #363636; /* :hovered buttons/menu items */
            --background-active: #6d6d6d; /* Button :active */
            --background-selected: #BDBDBD; /* Selected buttons/menu items */

            --outline-focus: rgb(0, 0, 0, 0); /* :focus outline */

            --border-radius: 0.5rem;
            --border-color: #333333; /* Control borders */
            --border-error: #cc0e0e;
            --box-shadow: 2px 2px 0px #111111;

            --text-base: rgba(255, 255, 255, 0.7); /* Normal text */
            --text-emphasis: rgba(255, 255, 255, 0.87); /* Chat messages/:focus inputs */
            --text-subtle: rgba(255, 255, 255, 0.5); /* Skeletons/secondary text */
            --text-disabled: var(--text-subtle); /* Disabled controls */
            --text-marker: var(--text-base); /* Map markers */

            --text-hover: var(--text-base); /* Text in :hover buttons */
            --text-active: var(--text-base); /* Text in :active buttons */
            --text-selected: var(--background-base); /* Text in selected buttons */
            --text-shadow: 0.1rem 0.1rem #000000; /* Text in selected buttons */

            --text-night: #ddffff; /* Clock time at night */
            --text-day: #ffdd33; /* Clock time in day */
        }

        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: var(--background-light) transparent;
        }

        *:hover, *:focus-within {
            scrollbar-color: var(--background-hover) transparent;
        }

        *::-webkit-scrollbar {
            width: 0.7rem;
        }

        *::-webkit-scrollbar-track {
            background: transparent;
        }

        *::-webkit-scrollbar-thumb {
            background-color: var(--background-light);
            border: 2px solid #000000;
            border-radius: 2rem;
            transition: background 1s ease-in;
            padding-right: 0.2rem;
        }

        *:hover::-webkit-scrollbar-thumb, *:focus-within::-webkit-scrollbar-thumb {
          background-color: var(--background-hover);
        }

        *::-webkit-scrollbar-button {
            display: none;
        }

        html, body {
            background-color: var(--background-dark);
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
	        overscroll-behavior: none;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: Raleway,
            system-ui,
            -apple-system,
            'Segoe UI',
            Roboto,
            Helvetica,
            Arial,
            sans-serif,
            'Apple Color Emoji',
            'Segoe UI Emoji';
            color: var(--text-base);
            text-shadow: var(--text-shadow);
            letter-spacing: 0.02rem;
        }

        noscript {
            color: var(--text-base);
            font-size: 1rem;
            font-family: sans-serif;
            text-align: center;
            line-height: 1.25;
        }

        #splash, noscript {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            transition: 0.3s opacity linear;
            z-index: 100;
            background-color: var(--background-dark);
            cursor: wait;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            padding: 4rem;
        }

        #splash[hidden] {
            display: none;
        }

        #splash__spinner {
            margin-top: 4rem;
            animation: fade 0.5s linear 1s;
            animation-fill-mode: both;
        }

        #splash__error {
            margin-top: 2rem;
            transition: opacity 0.5s ease-in;
            display: flex;
            flex-direction: column;
            text-align: center;
            max-width: 60rem;
        }

        #splash__error-message {
            font-family: monospace;
            background-color: var(--background-error);
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
        }

        #splash__error[aria-hidden=true] {
            opacity: 0;
        }

        #app {
            font-size: 1.6rem;
            height: 100%;
        }
    </style>
    <script type="module" crossorigin src="./live-atlas/assets/index.64ae640c.js"></script>
    <link rel="modulepreload" href="./live-atlas/assets/vendor.3a2d484d.js">
    <link rel="stylesheet" href="./live-atlas/assets/index.dccfb935.css">
  </head>
  <body>
    <?php echo file_get_contents('https://semivanilla.com/assets/templates/cookies-notice.html'); ?>
    <div id="splash">
        <svg id="splash__logo" width="200" height="200" viewBox="0 0 268.83 266.53" aria-hidden="true" fill="rgba(255, 255, 255, 0.7)">
            <path d="M5.235.662C2.153.606 0 2.945 0 6.912v216.577c0 5.288 3.828 11.41 8.582 13.725l57.835 28.165c4.755 2.316 8.582-.078 8.582-5.367V43.434c0-5.288-3.827-11.41-8.582-13.727L8.582 1.544C7.394.965 6.262.681 5.235.662zm32.283 135.96c14.394 0 26.062 11.669 26.062 26.063 0 14.394-24.167 59.55-26.062 57.654-1.854 1.854-26.063-43.26-26.063-57.654 0-14.394 11.669-26.063 26.063-26.063zM202.388 1.013l57.833 28.165c4.755 2.315 8.583 8.437 8.583 13.726v216.58c0 5.29-3.828 7.683-8.583 5.367l-57.833-28.164c-4.755-2.316-8.583-8.438-8.583-13.727V6.38c0-5.289 3.828-7.682 8.583-5.367zM172.012.39c-1.051-.035-2.209.191-3.426.709l-68.342 29.053c-4.867 2.07-8.786 7.993-8.786 13.282V260.01c0 5.29 3.919 7.88 8.786 5.811l68.342-29.053c4.867-2.07 8.786-7.991 8.786-13.28V6.91c0-3.967-2.204-6.417-5.36-6.521zm-36.949 41.216c14.394 0 26.063 11.668 26.063 26.062 0 14.394-24.168 59.55-26.063 57.655C133.209 127.177 109 82.063 109 67.668c0-14.394 11.669-26.062 26.063-26.062z"/>
            <path d="M48.573 162.689a11.056 11.056 0 0 1-11.056 11.056 11.056 11.056 0 0 1-11.056-11.056 11.056 11.056 0 0 1 11.056-11.056 11.056 11.056 0 0 1 11.056 11.056zM146.12 67.669a11.056 11.056 0 0 1-11.057 11.056 11.056 11.056 0 0 1-11.056-11.056 11.056 11.056 0 0 1 11.056-11.056 11.056 11.056 0 0 1 11.056 11.056z"/>
        </svg>

        <svg id="splash__spinner" width="38" height="38" viewBox="0 0 38 38" stroke="#fff" aria-label="LiveAtlas is loading">
            <g transform="translate(1 1)" stroke-width="2" fill="none">
                <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                <path d="M36 18c0-9.94-8.06-18-18-18">
                    <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"/>
                </path>
            </g>
        </svg>

        <div id="splash__error" aria-hidden="true">
            <span id="splash__error-message" role="alert"></span>
            <span id="splash__error-retry" aria-live="polite"></span>
        </div>
    </div>

    <noscript>
        <strong>LiveAtlas requires JavaScript to work.<br />Please enable it to continue.</strong>
    </noscript>

    <main id="app" aria-hidden="true"></main>
    <?php echo file_get_contents('https://semivanilla.com/assets/templates/cookies-notice.html'); ?>
  </body>
</html>