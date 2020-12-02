# Awsome Support Unoffical UP-CLI

On my wordpress site I disabled wordperss loopback and run all schdules actions using WP-CLI and cron.

This works well for most plugins. However it was not working for Awsome Support mail piping.

So I tracked down the function call to get new mails. I added it to a simple plugin that can be called from cron.
