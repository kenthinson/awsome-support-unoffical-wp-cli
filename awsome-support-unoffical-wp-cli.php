<?php
/*
Plugin Name: Awsome Support Unoffical WP-CLI
Description: functionality plugin.
Author:      Kent Hinson
Version:     1.0
*/



class UAS_CLI
{

    /**
     * Checks mailbox for new emails
     *
     * @since  1.0
     * @author Kent Hinson
     */


    public function getNewSupportEmails()
    {
        wpas_check_mails();
    }
}


/**
 * Registers our command when cli get's initialized.
 *
 * @since  1.0.0
 * @author Kent Hinson
 */
function uas_cli_register_commands()
{
    WP_CLI::add_command('uas', 'UAS_CLI');
}

add_action('cli_init', 'uas_cli_register_commands');
