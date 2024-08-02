<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function submitRequest(Request $request)
    {
        // Handle the form submission here
        // You can access form data using $request->input('field_name')
        
        // For now, let's just redirect back with a success message
        return redirect()->back()->with('success', 'Your portfolio request has been submitted successfully!');
    }

    // public function viewPortfolioRequest()
    // {
    //     // Fetch all portfolio requests from the database
    //     $portfolioRequests = PortfolioRequest::all();
        
    //     // Pass the data to the view
    //     return view('portfolio-requests', ['portfolioRequests' => $portfolioRequests]);
    // }
    public function show($slug)
    {
        // Here you can add logic, like fetching project details
        // For this example, we'll just redirect
        $externalUrl = $this->getExternalUrl($slug);
        return redirect()->away($externalUrl);
    }

    private function getExternalUrl($slug)
    {
        // Map slugs to URLs. In a real app, you might fetch this from a database
        $urlMap = [
            'minimalist-design' => 'https://kawanhtml.com/html-portofolio/exp1/index.html',
            // Add more mappings as needed
        ];

        return $urlMap[$slug] ?? 'https://your-default-url.com';
    }
}