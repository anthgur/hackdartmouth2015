## HackDartmouth 2015

This project was submitted to the HackDartmouth 2015 event. The project, as it stands, exists as a web application at 
www.maxrenke.com/computecoin/hackdartmouth2015/webapp.html. Submitting the form creates a request to the backend server
for computation to be distributed and the resulting page returns all the information of the different steps in the process.

Varying the length of the input changes the number of nodes performing the computation. Computation results are then hashed with their
respective peerID (identifying the node that performed the computation), then by the orgID (unique key for the organization requesting the
computation), and finally by a global key (in this proof of concept it is hardcoded, in the future this will probably change) to create
a ComputeCoin. These coins are associated with a peer that created them, as well as a weight. The weight will be factored into an as yet unknown
fairness algorithm to keep the distribution of computation on par with the rate of coins being created.

Submission to HackDartmouth completely lacks a mobile application as well as any interface to transfer coins. Time and resources were too limited to
create such an app, and the process of transfering ComputeCoins has yet to be determined (whether it will be a public block-chain type ledger such as Bitcoin, or
purely all centralized). Centralization of the app is taken for granted in this proof of concept, as serious consideration needs to be made towards the security,
integrity, and authenticity of the distributed compuation in the newtork.

Please feel free to contact me, Max Renke, at www.maxrenke.com.

Thank you to the HackDartmouth 2015 event organizers and all the sponsors who donated their time and equipment.

## Overview
The goal of this project is to create a centralized digital currency backed by distributed computation for nonprofit
organizations. A peer to peer mobile application, centralized distribution network, desktop application and
computation-specific API will be created to develop a working proof of concept.

## Rationale
The main problem with alternative currencies such as Bitcoin is that the computation required to
produce the currency ultimately is wasted. One solution would be to use established distributed
computation models to produce a currency that would then be distributed among those who performed
the computations. The concept of “proof of work” is defined by the end-user organization and thus
regulated to ensure fairness when determining the value of the currency being produced. Non-profit
organizations will benefit from the results of crowd-sourced computation as well as have a currency that
can be directly traded to help fund their efforts. Non-profit organizations can greatly benefit from
distributed computing, but a distributing computation platform is needed and this is what ComputeCoin can provide.

## Language

The current iteration of the product (one present as of the time of this commit) is done with HTML, PHP, and Javascript. Compuation is modeled in javascript
on a single server and merely emulates peers being spun up, executing, and then returning their result. Moving forward, the front end and API will remain largely
the same in terms of design, but will most likely communicate with a more powerful and dynamic server backend platform.

One key component is the computation. Extending solutions externally to the end user organization is the best way to ensure code is optimized properly for
the distributed computing. The end user does not need to specify how the data and job queues will be distributed - they merely interface with the ComputeCoin backend
as if it were a single platform.

## Considerations

Distributed computation solutions generally have the luxury of being within the same network and the entire organization owns all of the hardware.
ComputeCoin will most likely incorporate a slave

Peer to peer transfer of this currency must be centralized to ensure the authenticity and credibility of
the currency in use.


Computations must be distributed evenly and linearly to peers to ensure computation can be easily
mapped among peers.


The API must allow the end-user organizations to expressively describe how their computation shall take
place, but be able to be reduced down in order to be distributed among peers.


The API must restrict the type of data used as input and output (result) to allow for the centralized
network to manage currency distribution.


Computation results returned by peers must be hashed uniquely by both the end-user organization’s
key as well as the centralized distribution network’s key.


## Assumptions
In order for the distribution of currency to remain fair, the process in which the computation is
distributed must be normalized across all end-user organizations.


Each distributed set of computation is regulated and tied directly to the amount of currency being
produced per peer.

Peer identity, currency transfers, centralized distributed network integrity, and other operations need to be done securely, but for this purposes of this proof of concept are not.

## Design

There are a lot of design desicions and either implicitly or explicitly avoids complexity and makes assumptions about how elements may work in the future in an effort to simply the design enough to be developed into a proof of concept. The project will start with a limited number of peers and end-user organizations, a single CDN, and a very limited set of peers computation will be distributed to. Other considerations and assumptions are stated above.

### Mobile Application
- Manage peer identities
- Receive distribution of currency from centralized network
- Store distributed currency
- Send currency to peer
- Receive currency from peer
- Interface with desktop application to manage computation preference

### Centralized Distribution Network
- Manage end-user organizations
- Manage peer addresses
- Process API calls among end-user organizations
- Distribute computation among peers
- Distribute currency to peers

### Desktop Application
- Manage peer identities
- Select among potential end-user organizations to perform computations
- Interface with centralized network to perform computation


### Computation-Specific API
- Interface with the centralized distribution network to perform computations
- Allow the end user to provide data to be processed
- Allow the end user to describe the computation to be performed
- Allow the end user to provide the expected result

## Centralized Distributed Network (CDN)

The CDN will be the backbone of this project. The mobile application, desktop application, and API will all hook into the network. The CDN handles the production and distribution of both computation and currency.

The mobile application will interface with a database of peer identities to tie a peer to the mobile application. The peer will then receive its internal CDN address which will be presented to the mobile user to allow them to transfer the currency. Currency will be stored on the CDN and accessed through the mobile application (no currency, for the moment, will be stored on the device)

### Copyright

Copyright 2015 Maxwell Renke

All rights reserved.
