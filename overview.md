## Overview
The goal of this project is to create a centralized currency backed by distributed computation for nonprofit
organizations. A peer to peer mobile application, centralized distribution network, and
computation-specific API will be created to develop a working proof of concept.

## Rationale
The main problem with alternative currencies such as Bitcoin is that the computation required to
produce the currency ultimately is wasted. One solution would be to use established distributed
computation models to produce a currency that would then be distributed among those who performed
the computations. The concept of “proof of work” is defined by the end-user organization and thus
regulated to ensure fairness when determining the value of the currency being produced. Non-profit
organizations will benefit from the results of crowd-sourced computation as well as have a currency that
can be directly traded to help fund their efforts.

## Considerations
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

## Design
### Mobile Application
- Receive distribution of currency from centralized network
- Store distributed currency
- Transfer currency among peers
- Select among potential end-user organizations to perform computations
- Interface with centralized network to perform computation

### Centralized Distribution Network
- Manage end-user organizations
- Manage peer addresses
- Process API calls among end-user organizations
- Distribute computation among peers
- Distribute currency to peers

### Computation-Specific API
- Interface with the centralized distribution network to perform computations
- Allow the end user to provide data to be processed
- Allow the end user to describe the computation to be performed
- Allow the end user to provide the expected result
