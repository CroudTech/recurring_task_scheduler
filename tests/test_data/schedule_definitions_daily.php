<?php
return [
    'Daily [every other day]' => [
        '{ "timezone": "Europe/London", "range": { "start": "2017-08-16", "end": "2017-11-30" }, "time_of_day": "09:00", "type": "periodic", "interval": "2", "period": "days", "day_number": false, "week_number": false, "days": {}, "months": {} }',
        [
            '2017-08-16T08:00:00+00:00', // Wed, 16 Aug 2017 08:00:00 +0000
            '2017-08-18T08:00:00+00:00', // Fri, 18 Aug 2017 08:00:00 +0000
            '2017-08-20T08:00:00+00:00', // Sun, 20 Aug 2017 08:00:00 +0000
            '2017-08-22T08:00:00+00:00', // Tue, 22 Aug 2017 08:00:00 +0000
            '2017-08-24T08:00:00+00:00', // Thu, 24 Aug 2017 08:00:00 +0000
            '2017-08-26T08:00:00+00:00', // Sat, 26 Aug 2017 08:00:00 +0000
            '2017-08-28T08:00:00+00:00', // Mon, 28 Aug 2017 08:00:00 +0000
            '2017-08-30T08:00:00+00:00', // Wed, 30 Aug 2017 08:00:00 +0000
            '2017-09-01T08:00:00+00:00', // Fri, 01 Sep 2017 08:00:00 +0000
            '2017-09-03T08:00:00+00:00', // Sun, 03 Sep 2017 08:00:00 +0000
            '2017-09-05T08:00:00+00:00', // Tue, 05 Sep 2017 08:00:00 +0000
            '2017-09-07T08:00:00+00:00', // Thu, 07 Sep 2017 08:00:00 +0000
            '2017-09-09T08:00:00+00:00', // Sat, 09 Sep 2017 08:00:00 +0000
            '2017-09-11T08:00:00+00:00', // Mon, 11 Sep 2017 08:00:00 +0000
            '2017-09-13T08:00:00+00:00', // Wed, 13 Sep 2017 08:00:00 +0000
            '2017-09-15T08:00:00+00:00', // Fri, 15 Sep 2017 08:00:00 +0000
            '2017-09-17T08:00:00+00:00', // Sun, 17 Sep 2017 08:00:00 +0000
            '2017-09-19T08:00:00+00:00', // Tue, 19 Sep 2017 08:00:00 +0000
            '2017-09-21T08:00:00+00:00', // Thu, 21 Sep 2017 08:00:00 +0000
            '2017-09-23T08:00:00+00:00', // Sat, 23 Sep 2017 08:00:00 +0000
            '2017-09-25T08:00:00+00:00', // Mon, 25 Sep 2017 08:00:00 +0000
            '2017-09-27T08:00:00+00:00', // Wed, 27 Sep 2017 08:00:00 +0000
            '2017-09-29T08:00:00+00:00', // Fri, 29 Sep 2017 08:00:00 +0000
            '2017-10-01T08:00:00+00:00', // Sun, 01 Oct 2017 08:00:00 +0000
            '2017-10-03T08:00:00+00:00', // Tue, 03 Oct 2017 08:00:00 +0000
            '2017-10-05T08:00:00+00:00', // Thu, 05 Oct 2017 08:00:00 +0000
            '2017-10-07T08:00:00+00:00', // Sat, 07 Oct 2017 08:00:00 +0000
            '2017-10-09T08:00:00+00:00', // Mon, 09 Oct 2017 08:00:00 +0000
            '2017-10-11T08:00:00+00:00', // Wed, 11 Oct 2017 08:00:00 +0000
            '2017-10-13T08:00:00+00:00', // Fri, 13 Oct 2017 08:00:00 +0000
            '2017-10-15T08:00:00+00:00', // Sun, 15 Oct 2017 08:00:00 +0000
            '2017-10-17T08:00:00+00:00', // Tue, 17 Oct 2017 08:00:00 +0000
            '2017-10-19T08:00:00+00:00', // Thu, 19 Oct 2017 08:00:00 +0000
            '2017-10-21T08:00:00+00:00', // Sat, 21 Oct 2017 08:00:00 +0000
            '2017-10-23T08:00:00+00:00', // Mon, 23 Oct 2017 08:00:00 +0000
            '2017-10-25T08:00:00+00:00', // Wed, 25 Oct 2017 08:00:00 +0000
            '2017-10-27T08:00:00+00:00', // Fri, 27 Oct 2017 08:00:00 +0000
            '2017-10-29T09:00:00+00:00', // Sun, 29 Oct 2017 09:00:00 +0000
            '2017-10-31T09:00:00+00:00', // Tue, 31 Oct 2017 09:00:00 +0000
            '2017-11-02T09:00:00+00:00', // Thu, 02 Nov 2017 09:00:00 +0000
            '2017-11-04T09:00:00+00:00', // Sat, 04 Nov 2017 09:00:00 +0000
            '2017-11-06T09:00:00+00:00', // Mon, 06 Nov 2017 09:00:00 +0000
            '2017-11-08T09:00:00+00:00', // Wed, 08 Nov 2017 09:00:00 +0000
            '2017-11-10T09:00:00+00:00', // Fri, 10 Nov 2017 09:00:00 +0000
            '2017-11-12T09:00:00+00:00', // Sun, 12 Nov 2017 09:00:00 +0000
            '2017-11-14T09:00:00+00:00', // Tue, 14 Nov 2017 09:00:00 +0000
            '2017-11-16T09:00:00+00:00', // Thu, 16 Nov 2017 09:00:00 +0000
            '2017-11-18T09:00:00+00:00', // Sat, 18 Nov 2017 09:00:00 +0000
            '2017-11-20T09:00:00+00:00', // Mon, 20 Nov 2017 09:00:00 +0000
            '2017-11-22T09:00:00+00:00', // Wed, 22 Nov 2017 09:00:00 +0000
            '2017-11-24T09:00:00+00:00', // Fri, 24 Nov 2017 09:00:00 +0000
            '2017-11-26T09:00:00+00:00', // Sun, 26 Nov 2017 09:00:00 +0000
            '2017-11-28T09:00:00+00:00', // Tue, 28 Nov 2017 09:00:00 +0000
            '2017-11-30T09:00:00+00:00', // Thu, 30 Nov 2017 09:00:00 +0000
        ],
    ],
    'Weekly [every week day]' => [
        '{ "timezone": "Europe/London", "range": { "start": "2017-08-16", "end": "2017-11-30" }, "time_of_day": "09:00", "type": "periodic", "interval": 1, "period": "days", "day_number": false, "week_number": false, "days": { "mon": true, "tue": true, "wed": true, "thu": true, "fri": true, "sat": false, "sun": false }, "months": {} }',
        [
            '2017-08-16T08:00:00+00:00', // Wed, 16 Aug 2017 08:00:00 +0000
            '2017-08-17T08:00:00+00:00', // Thu, 17 Aug 2017 08:00:00 +0000
            '2017-08-18T08:00:00+00:00', // Fri, 18 Aug 2017 08:00:00 +0000
            '2017-08-21T08:00:00+00:00', // Mon, 21 Aug 2017 08:00:00 +0000
            '2017-08-22T08:00:00+00:00', // Tue, 22 Aug 2017 08:00:00 +0000
            '2017-08-23T08:00:00+00:00', // Wed, 23 Aug 2017 08:00:00 +0000
            '2017-08-24T08:00:00+00:00', // Thu, 24 Aug 2017 08:00:00 +0000
            '2017-08-25T08:00:00+00:00', // Fri, 25 Aug 2017 08:00:00 +0000
            '2017-08-28T08:00:00+00:00', // Mon, 28 Aug 2017 08:00:00 +0000
            '2017-08-29T08:00:00+00:00', // Tue, 29 Aug 2017 08:00:00 +0000
            '2017-08-30T08:00:00+00:00', // Wed, 30 Aug 2017 08:00:00 +0000
            '2017-08-31T08:00:00+00:00', // Thu, 31 Aug 2017 08:00:00 +0000
            '2017-09-01T08:00:00+00:00', // Fri, 01 Sep 2017 08:00:00 +0000
            '2017-09-04T08:00:00+00:00', // Mon, 04 Sep 2017 08:00:00 +0000
            '2017-09-05T08:00:00+00:00', // Tue, 05 Sep 2017 08:00:00 +0000
            '2017-09-06T08:00:00+00:00', // Wed, 06 Sep 2017 08:00:00 +0000
            '2017-09-07T08:00:00+00:00', // Thu, 07 Sep 2017 08:00:00 +0000
            '2017-09-08T08:00:00+00:00', // Fri, 08 Sep 2017 08:00:00 +0000
            '2017-09-11T08:00:00+00:00', // Mon, 11 Sep 2017 08:00:00 +0000
            '2017-09-12T08:00:00+00:00', // Tue, 12 Sep 2017 08:00:00 +0000
            '2017-09-13T08:00:00+00:00', // Wed, 13 Sep 2017 08:00:00 +0000
            '2017-09-14T08:00:00+00:00', // Thu, 14 Sep 2017 08:00:00 +0000
            '2017-09-15T08:00:00+00:00', // Fri, 15 Sep 2017 08:00:00 +0000
            '2017-09-18T08:00:00+00:00', // Mon, 18 Sep 2017 08:00:00 +0000
            '2017-09-19T08:00:00+00:00', // Tue, 19 Sep 2017 08:00:00 +0000
            '2017-09-20T08:00:00+00:00', // Wed, 20 Sep 2017 08:00:00 +0000
            '2017-09-21T08:00:00+00:00', // Thu, 21 Sep 2017 08:00:00 +0000
            '2017-09-22T08:00:00+00:00', // Fri, 22 Sep 2017 08:00:00 +0000
            '2017-09-25T08:00:00+00:00', // Mon, 25 Sep 2017 08:00:00 +0000
            '2017-09-26T08:00:00+00:00', // Tue, 26 Sep 2017 08:00:00 +0000
            '2017-09-27T08:00:00+00:00', // Wed, 27 Sep 2017 08:00:00 +0000
            '2017-09-28T08:00:00+00:00', // Thu, 28 Sep 2017 08:00:00 +0000
            '2017-09-29T08:00:00+00:00', // Fri, 29 Sep 2017 08:00:00 +0000
            '2017-10-02T08:00:00+00:00', // Mon, 02 Oct 2017 08:00:00 +0000
            '2017-10-03T08:00:00+00:00', // Tue, 03 Oct 2017 08:00:00 +0000
            '2017-10-04T08:00:00+00:00', // Wed, 04 Oct 2017 08:00:00 +0000
            '2017-10-05T08:00:00+00:00', // Thu, 05 Oct 2017 08:00:00 +0000
            '2017-10-06T08:00:00+00:00', // Fri, 06 Oct 2017 08:00:00 +0000
            '2017-10-09T08:00:00+00:00', // Mon, 09 Oct 2017 08:00:00 +0000
            '2017-10-10T08:00:00+00:00', // Tue, 10 Oct 2017 08:00:00 +0000
            '2017-10-11T08:00:00+00:00', // Wed, 11 Oct 2017 08:00:00 +0000
            '2017-10-12T08:00:00+00:00', // Thu, 12 Oct 2017 08:00:00 +0000
            '2017-10-13T08:00:00+00:00', // Fri, 13 Oct 2017 08:00:00 +0000
            '2017-10-16T08:00:00+00:00', // Mon, 16 Oct 2017 08:00:00 +0000
            '2017-10-17T08:00:00+00:00', // Tue, 17 Oct 2017 08:00:00 +0000
            '2017-10-18T08:00:00+00:00', // Wed, 18 Oct 2017 08:00:00 +0000
            '2017-10-19T08:00:00+00:00', // Thu, 19 Oct 2017 08:00:00 +0000
            '2017-10-20T08:00:00+00:00', // Fri, 20 Oct 2017 08:00:00 +0000
            '2017-10-23T08:00:00+00:00', // Mon, 23 Oct 2017 08:00:00 +0000
            '2017-10-24T08:00:00+00:00', // Tue, 24 Oct 2017 08:00:00 +0000
            '2017-10-25T08:00:00+00:00', // Wed, 25 Oct 2017 08:00:00 +0000
            '2017-10-26T08:00:00+00:00', // Thu, 26 Oct 2017 08:00:00 +0000
            '2017-10-27T08:00:00+00:00', // Fri, 27 Oct 2017 08:00:00 +0000
            '2017-10-30T09:00:00+00:00', // Mon, 30 Oct 2017 09:00:00 +0000
            '2017-10-31T09:00:00+00:00', // Tue, 31 Oct 2017 09:00:00 +0000
            '2017-11-01T09:00:00+00:00', // Wed, 01 Nov 2017 09:00:00 +0000
            '2017-11-02T09:00:00+00:00', // Thu, 02 Nov 2017 09:00:00 +0000
            '2017-11-03T09:00:00+00:00', // Fri, 03 Nov 2017 09:00:00 +0000
            '2017-11-06T09:00:00+00:00', // Mon, 06 Nov 2017 09:00:00 +0000
            '2017-11-07T09:00:00+00:00', // Tue, 07 Nov 2017 09:00:00 +0000
            '2017-11-08T09:00:00+00:00', // Wed, 08 Nov 2017 09:00:00 +0000
            '2017-11-09T09:00:00+00:00', // Thu, 09 Nov 2017 09:00:00 +0000
            '2017-11-10T09:00:00+00:00', // Fri, 10 Nov 2017 09:00:00 +0000
            '2017-11-13T09:00:00+00:00', // Mon, 13 Nov 2017 09:00:00 +0000
            '2017-11-14T09:00:00+00:00', // Tue, 14 Nov 2017 09:00:00 +0000
            '2017-11-15T09:00:00+00:00', // Wed, 15 Nov 2017 09:00:00 +0000
            '2017-11-16T09:00:00+00:00', // Thu, 16 Nov 2017 09:00:00 +0000
            '2017-11-17T09:00:00+00:00', // Fri, 17 Nov 2017 09:00:00 +0000
            '2017-11-20T09:00:00+00:00', // Mon, 20 Nov 2017 09:00:00 +0000
            '2017-11-21T09:00:00+00:00', // Tue, 21 Nov 2017 09:00:00 +0000
            '2017-11-22T09:00:00+00:00', // Wed, 22 Nov 2017 09:00:00 +0000
            '2017-11-23T09:00:00+00:00', // Thu, 23 Nov 2017 09:00:00 +0000
            '2017-11-24T09:00:00+00:00', // Fri, 24 Nov 2017 09:00:00 +0000
            '2017-11-27T09:00:00+00:00', // Mon, 27 Nov 2017 09:00:00 +0000
            '2017-11-28T09:00:00+00:00', // Tue, 28 Nov 2017 09:00:00 +0000
            '2017-11-29T09:00:00+00:00', // Wed, 29 Nov 2017 09:00:00 +0000
            '2017-11-30T09:00:00+00:00', // Thu, 30 Nov 2017 09:00:00 +0000
        ],
    ],




];