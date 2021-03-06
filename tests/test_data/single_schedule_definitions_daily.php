<?php
return [
'Multiple Daily America [every other day]' => [
        '{ "timezone": "America/New_York", "range": { "start": "2017-08-16", "end": "2017-11-30" }, "time_of_day": "09:00", "times": { "9am": "09:00", "10am": "10:00"}, "type": "periodic", "interval": "2", "period": "days", "day_number": false, "week_number": false, "days": {}, "months": {} }',
        [
            '2017-08-16T13:00:00+00:00', // Wed, 16 Aug 2017 13:00:00 +0000
            '2017-08-16T14:00:00+00:00', // Wed, 16 Aug 2017 14:00:00 +0000
            '2017-08-18T13:00:00+00:00', // Fri, 18 Aug 2017 13:00:00 +0000
            '2017-08-18T14:00:00+00:00', // Fri, 18 Aug 2017 14:00:00 +0000
            '2017-08-20T13:00:00+00:00', // Sun, 20 Aug 2017 13:00:00 +0000
            '2017-08-20T14:00:00+00:00', // Sun, 20 Aug 2017 14:00:00 +0000
            '2017-08-22T13:00:00+00:00', // Tue, 22 Aug 2017 13:00:00 +0000
            '2017-08-22T14:00:00+00:00', // Tue, 22 Aug 2017 14:00:00 +0000
            '2017-08-24T13:00:00+00:00', // Thu, 24 Aug 2017 13:00:00 +0000
            '2017-08-24T14:00:00+00:00', // Thu, 24 Aug 2017 14:00:00 +0000
            '2017-08-26T13:00:00+00:00', // Sat, 26 Aug 2017 13:00:00 +0000
            '2017-08-26T14:00:00+00:00', // Sat, 26 Aug 2017 14:00:00 +0000
            '2017-08-28T13:00:00+00:00', // Mon, 28 Aug 2017 13:00:00 +0000
            '2017-08-28T14:00:00+00:00', // Mon, 28 Aug 2017 14:00:00 +0000
            '2017-08-30T13:00:00+00:00', // Wed, 30 Aug 2017 13:00:00 +0000
            '2017-08-30T14:00:00+00:00', // Wed, 30 Aug 2017 14:00:00 +0000
            '2017-09-01T13:00:00+00:00', // Fri, 01 Sep 2017 13:00:00 +0000
            '2017-09-01T14:00:00+00:00', // Fri, 01 Sep 2017 14:00:00 +0000
            '2017-09-03T13:00:00+00:00', // Sun, 03 Sep 2017 13:00:00 +0000
            '2017-09-03T14:00:00+00:00', // Sun, 03 Sep 2017 14:00:00 +0000
            '2017-09-05T13:00:00+00:00', // Tue, 05 Sep 2017 13:00:00 +0000
            '2017-09-05T14:00:00+00:00', // Tue, 05 Sep 2017 14:00:00 +0000
            '2017-09-07T13:00:00+00:00', // Thu, 07 Sep 2017 13:00:00 +0000
            '2017-09-07T14:00:00+00:00', // Thu, 07 Sep 2017 14:00:00 +0000
            '2017-09-09T13:00:00+00:00', // Sat, 09 Sep 2017 13:00:00 +0000
            '2017-09-09T14:00:00+00:00', // Sat, 09 Sep 2017 14:00:00 +0000
            '2017-09-11T13:00:00+00:00', // Mon, 11 Sep 2017 13:00:00 +0000
            '2017-09-11T14:00:00+00:00', // Mon, 11 Sep 2017 14:00:00 +0000
            '2017-09-13T13:00:00+00:00', // Wed, 13 Sep 2017 13:00:00 +0000
            '2017-09-13T14:00:00+00:00', // Wed, 13 Sep 2017 14:00:00 +0000
            '2017-09-15T13:00:00+00:00', // Fri, 15 Sep 2017 13:00:00 +0000
            '2017-09-15T14:00:00+00:00', // Fri, 15 Sep 2017 14:00:00 +0000
            '2017-09-17T13:00:00+00:00', // Sun, 17 Sep 2017 13:00:00 +0000
            '2017-09-17T14:00:00+00:00', // Sun, 17 Sep 2017 14:00:00 +0000
            '2017-09-19T13:00:00+00:00', // Tue, 19 Sep 2017 13:00:00 +0000
            '2017-09-19T14:00:00+00:00', // Tue, 19 Sep 2017 14:00:00 +0000
            '2017-09-21T13:00:00+00:00', // Thu, 21 Sep 2017 13:00:00 +0000
            '2017-09-21T14:00:00+00:00', // Thu, 21 Sep 2017 14:00:00 +0000
            '2017-09-23T13:00:00+00:00', // Sat, 23 Sep 2017 13:00:00 +0000
            '2017-09-23T14:00:00+00:00', // Sat, 23 Sep 2017 14:00:00 +0000
            '2017-09-25T13:00:00+00:00', // Mon, 25 Sep 2017 13:00:00 +0000
            '2017-09-25T14:00:00+00:00', // Mon, 25 Sep 2017 14:00:00 +0000
            '2017-09-27T13:00:00+00:00', // Wed, 27 Sep 2017 13:00:00 +0000
            '2017-09-27T14:00:00+00:00', // Wed, 27 Sep 2017 14:00:00 +0000
            '2017-09-29T13:00:00+00:00', // Fri, 29 Sep 2017 13:00:00 +0000
            '2017-09-29T14:00:00+00:00', // Fri, 29 Sep 2017 14:00:00 +0000
            '2017-10-01T13:00:00+00:00', // Sun, 01 Oct 2017 13:00:00 +0000
            '2017-10-01T14:00:00+00:00', // Sun, 01 Oct 2017 14:00:00 +0000
            '2017-10-03T13:00:00+00:00', // Tue, 03 Oct 2017 13:00:00 +0000
            '2017-10-03T14:00:00+00:00', // Tue, 03 Oct 2017 14:00:00 +0000
            '2017-10-05T13:00:00+00:00', // Thu, 05 Oct 2017 13:00:00 +0000
            '2017-10-05T14:00:00+00:00', // Thu, 05 Oct 2017 14:00:00 +0000
            '2017-10-07T13:00:00+00:00', // Sat, 07 Oct 2017 13:00:00 +0000
            '2017-10-07T14:00:00+00:00', // Sat, 07 Oct 2017 14:00:00 +0000
            '2017-10-09T13:00:00+00:00', // Mon, 09 Oct 2017 13:00:00 +0000
            '2017-10-09T14:00:00+00:00', // Mon, 09 Oct 2017 14:00:00 +0000
            '2017-10-11T13:00:00+00:00', // Wed, 11 Oct 2017 13:00:00 +0000
            '2017-10-11T14:00:00+00:00', // Wed, 11 Oct 2017 14:00:00 +0000
            '2017-10-13T13:00:00+00:00', // Fri, 13 Oct 2017 13:00:00 +0000
            '2017-10-13T14:00:00+00:00', // Fri, 13 Oct 2017 14:00:00 +0000
            '2017-10-15T13:00:00+00:00', // Sun, 15 Oct 2017 13:00:00 +0000
            '2017-10-15T14:00:00+00:00', // Sun, 15 Oct 2017 14:00:00 +0000
            '2017-10-17T13:00:00+00:00', // Tue, 17 Oct 2017 13:00:00 +0000
            '2017-10-17T14:00:00+00:00', // Tue, 17 Oct 2017 14:00:00 +0000
            '2017-10-19T13:00:00+00:00', // Thu, 19 Oct 2017 13:00:00 +0000
            '2017-10-19T14:00:00+00:00', // Thu, 19 Oct 2017 14:00:00 +0000
            '2017-10-21T13:00:00+00:00', // Sat, 21 Oct 2017 13:00:00 +0000
            '2017-10-21T14:00:00+00:00', // Sat, 21 Oct 2017 14:00:00 +0000
            '2017-10-23T13:00:00+00:00', // Mon, 23 Oct 2017 13:00:00 +0000
            '2017-10-23T14:00:00+00:00', // Mon, 23 Oct 2017 14:00:00 +0000
            '2017-10-25T13:00:00+00:00', // Wed, 25 Oct 2017 13:00:00 +0000
            '2017-10-25T14:00:00+00:00', // Wed, 25 Oct 2017 14:00:00 +0000
            '2017-10-27T13:00:00+00:00', // Fri, 27 Oct 2017 13:00:00 +0000
            '2017-10-27T14:00:00+00:00', // Fri, 27 Oct 2017 14:00:00 +0000
            '2017-10-29T13:00:00+00:00', // Sun, 29 Oct 2017 13:00:00 +0000
            '2017-10-29T14:00:00+00:00', // Sun, 29 Oct 2017 14:00:00 +0000
            '2017-10-31T13:00:00+00:00', // Tue, 31 Oct 2017 13:00:00 +0000
            '2017-10-31T14:00:00+00:00', // Tue, 31 Oct 2017 14:00:00 +0000
            '2017-11-02T13:00:00+00:00', // Thu, 02 Nov 2017 13:00:00 +0000
            '2017-11-02T14:00:00+00:00', // Thu, 02 Nov 2017 14:00:00 +0000
            '2017-11-04T13:00:00+00:00', // Sat, 04 Nov 2017 13:00:00 +0000
            '2017-11-04T14:00:00+00:00', // Sat, 04 Nov 2017 14:00:00 +0000
            '2017-11-06T14:00:00+00:00', // Mon, 06 Nov 2017 14:00:00 +0000
            '2017-11-06T15:00:00+00:00', // Mon, 06 Nov 2017 15:00:00 +0000
            '2017-11-08T14:00:00+00:00', // Wed, 08 Nov 2017 14:00:00 +0000
            '2017-11-08T15:00:00+00:00', // Wed, 08 Nov 2017 15:00:00 +0000
            '2017-11-10T14:00:00+00:00', // Fri, 10 Nov 2017 14:00:00 +0000
            '2017-11-10T15:00:00+00:00', // Fri, 10 Nov 2017 15:00:00 +0000
            '2017-11-12T14:00:00+00:00', // Sun, 12 Nov 2017 14:00:00 +0000
            '2017-11-12T15:00:00+00:00', // Sun, 12 Nov 2017 15:00:00 +0000
            '2017-11-14T14:00:00+00:00', // Tue, 14 Nov 2017 14:00:00 +0000
            '2017-11-14T15:00:00+00:00', // Tue, 14 Nov 2017 15:00:00 +0000
            '2017-11-16T14:00:00+00:00', // Thu, 16 Nov 2017 14:00:00 +0000
            '2017-11-16T15:00:00+00:00', // Thu, 16 Nov 2017 15:00:00 +0000
            '2017-11-18T14:00:00+00:00', // Sat, 18 Nov 2017 14:00:00 +0000
            '2017-11-18T15:00:00+00:00', // Sat, 18 Nov 2017 15:00:00 +0000
            '2017-11-20T14:00:00+00:00', // Mon, 20 Nov 2017 14:00:00 +0000
            '2017-11-20T15:00:00+00:00', // Mon, 20 Nov 2017 15:00:00 +0000
            '2017-11-22T14:00:00+00:00', // Wed, 22 Nov 2017 14:00:00 +0000
            '2017-11-22T15:00:00+00:00', // Wed, 22 Nov 2017 15:00:00 +0000
            '2017-11-24T14:00:00+00:00', // Fri, 24 Nov 2017 14:00:00 +0000
            '2017-11-24T15:00:00+00:00', // Fri, 24 Nov 2017 15:00:00 +0000
            '2017-11-26T14:00:00+00:00', // Sun, 26 Nov 2017 14:00:00 +0000
            '2017-11-26T15:00:00+00:00', // Sun, 26 Nov 2017 15:00:00 +0000
            '2017-11-28T14:00:00+00:00', // Tue, 28 Nov 2017 14:00:00 +0000
            '2017-11-28T15:00:00+00:00', // Tue, 28 Nov 2017 15:00:00 +0000
            '2017-11-30T14:00:00+00:00', // Thu, 30 Nov 2017 14:00:00 +0000
            '2017-11-30T15:00:00+00:00', // Thu, 30 Nov 2017 15:00:00 +0000
        ],
    ],
];
