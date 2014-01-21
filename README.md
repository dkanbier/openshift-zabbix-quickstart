Zabbix on OpenShift
===================
Zabbix is the ultimate enterprise-level software designed for monitoring availability and performance of IT infrastructure components. Zabbix is open source and comes at no cost.

More information can be found on the official Zabbix website at http://www.zabbix.com

Running on OpenShift
--------------------

Create an account at http://openshift.redhat.com/ and install the client tools (run 'rhc setup' first)

Create a PHP application with MySQL support

	rhc app create zabbix php-5 mysql-5 --from-code=https://github.com/dkanbier/openshift-zabbix-quickstart

That's it, you can now checkout your application at:

	http://zabbix-$yournamespace.rhcloud.com

You can log in using the default Zabbix credentials:
	Username: Admin
	Password: zabbix

Notes
-----

This is a testing quickstart and may break. It needs a lot of tidying up and I'm thinking of compiling the binaries and upload them instead of letting rhcloud handling compilation.

The default port numbers have been increased by 5000 because otherwise they conflict with OpenShift's reserved ports.

At the time of writing the Zabbix version is kind of fixed, so only 2.2.1 is supported.
