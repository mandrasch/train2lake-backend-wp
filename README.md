# train2lake Backend WP

Simple WordPress REST API backend for https://train2lake.vercel.app/ (https://github.com/mandrasch/train2lake), manages destinations via CPT and ACF Pro. You'll need an ACF Pro license.

## Local setup

```bash
ddev start
# Download WordPress
ddev wp core download
# Finish WP install in browser
ddev launch
```

1. Install ACF Pro
1. Activate Child Theme: `ddev wp theme activate traintolake-backend-wp`
1. Set permalink structure to "path name", hit "Save" in "Settings -> Permalinks" (TODO: add this command via WP-CLI as well)

Switch frontends (!) `.env` file to the following to connect it with this DDEV backend: 

```bash
# .env
PUBLIC_WP_REST_API_DOMAIN=https://train2lake-backend-wp.ddev.site
```

## How was this created?

Live site:

1. Install WP live site on webspace
1. Install ACF Pro
1. Install [git-installer](https://github.com/SayHelloGmbH/git-installer)
1. Add permalink structure, hit "Save" in "Settings -> Permalinks"
1. Install WP Rest Cache plugin

Repository / local:

1. DDEV project creation (https://ddev.readthedocs.io/en/latest/users/quickstart/#wordpress) via `ddev config --project-type=wordpress`
1. Generated provider pull script via https://ddev-pull-wp.mandrasch.eu/, see `.ddev/providers/ssh.yaml`
1. Generated `.gitignore` via https://ddev-pull-wp.mandrasch.eu/
1. Create simple child theme
1. Add `acf-local-json/` folder
1. Create CPT Destinations, expose to REST API
1. Add theme support for [align-wide](https://gutenbergtimes.com/layouts-and-wide-alignments-in-wordpress-then-now-and-upcoming-changes/)

Internal notes: 

- Manitu Webspace adds `add_filter( 'auto_update_plugin', '__return_true' );` to wp-config.php, not working with WP-CLI. Removed before ddev pull.

## Advanced

### Local setup after clone (with ssh pull from a live WP site)

1. `ddev start`
1. `ddev auth ssh`
1. Copy the `.ddev/providers/ssh.example.yaml` file to `.ddev/providers/ssh.yaml` and insert the values for your webspace, see https://ddev-pull-wp.mandrasch.eu/ for more info.
1. `ddev pull ssh`
1. `ddev launch`

### Set up the child theme on your live site

1. Install [git-installer](https://github.com/SayHelloGmbH/git-installer) and add your repository to your live site, use the subdirectory deployment.
