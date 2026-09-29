---
title: "Kin Customer Portal"
description: "Where Kin home and auto customers manage their policies"
image: "/images/work/8-kin-customer-portal/policy-card-states.jpg"
tags: ["Rails", "ViewComponent", "Stimulus", "Kinetic"]
order: 2
---

The customer portal is where Kin policyholders check coverage, make payments, upload documents, and start claims. From 2025 to early 2026 I did design and front-end work on its redesign, built on Kinetic.

The portal is `kin_portal`, a Rails engine that owns the portal's views and controllers. Kin's product apps pass it data through adapters, so one portal handles both home and auto policies.

## What I worked on

- Policy cards for each policy state: active, upcoming renewal, pending cancellation, nonrenewed, and inactive
- Payments: installment schedules, past payments grouped by term, escrow and card-on-file payment methods
- Coverages and deductibles, and action items for required documents
- Kustomer chat, Datadog RUM, and FullStory
- Gem release and publish workflows for the engine

![The portal before the redesign](/images/work/8-kin-customer-portal/legacy-portal.jpg)

![A policy card in the pending cancellation state with a Take Action button](/images/work/8-kin-customer-portal/pending-cancellation.jpg)

![Action items with due dates for wind mitigation and roof documents](/images/work/8-kin-customer-portal/action-items.jpg)

![The mobile payments tab with upcoming installments and a no-card-on-file alert](/images/work/8-kin-customer-portal/mobile-payments.jpg)

![A grid of desktop portal screens](/images/work/8-kin-customer-portal/desktop-screens.jpg)
