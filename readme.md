# GoToConnect Dev Examples

This repo shows a few different possibilities of things that can be accomplished using a few of the different dial plan nodes
that come with the GoToConnect platform.


The first example is with the "Remote Call Control Node"

From GTC's documentation:
	
Sends requests to the specified URL address and waits for a command back from that URL identifying the destination extension 
(used to integrate with third-party call management systems). If there is no response from the URL after two seconds, the 
call will be routed to the next step in the dial plan. If the destination extension is invalid, the call will be routed to the 
failover destination for the line. The extension can be given as the extension number (e.g., 1234) or as the extension ID 
(e.g., 014953cc-025a-c471-8e89-000100620002, the last ID in the URL on the extension’s page). The extension number or ID 
should be the only text in the response and should not be surrounded by quotes. Sample use cases include:

- Route calls to a sales agent based on information in a CRM.
- Route calls to a support agent that has been working on a ticket with a customer.
- Route calls based on the area code of a caller.




The second is with the "HTTP Notify Node"

From GTC's documentation:

Sends notifications to a remote web server through a URL (https is supported). This allows an event in your phone system to 
trigger an action on a remote system. The URL you provide will be hit with an HTTP POST as calls ‘pass through’. Multiple 
variables are available, some of which are also included in the post body. Sample use cases include:

- Trigger a remote application to generate a “screen pop” notification.
- Trigger an email/SMS message in real-time.
- Allow supplemental real-time call logging.


https://support.goto.com/connect/help/what-are-the-dial-plan-nodes
