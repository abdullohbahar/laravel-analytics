<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function index()
    {
        // Next, create an instance of the Analytics class, passing your API credentials.
        $analytics = new Analytics([
            'service_account_credentials_json' => '/path/to/your/service-account-credentials.json',
            'view_id' => '12345678',
        ]);

        // Use the fetchTotalVisitorsAndPageViews method to retrieve the data.
        $stats = $analytics->fetchTotalVisitorsAndPageViews(Period::days(30));

        // Print the results.
        echo "Total users: " . $stats->totalVisitors() . "\n";
        echo "Total pageviews: " . $stats->totalPageViews() . "\n";
    }
}
