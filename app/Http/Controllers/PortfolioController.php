<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $people = [
        'ningrat' => [
            'name' => 'Ningrat',
            'role' => 'Web Developer',
            'bio' => 'Passionate about Laravel, Tailwind, and modern web design.',
            'image' => '/images/ningrat.jpg',
            'projects' => [
                ['title' => 'Laravel Deployment', 'desc' => 'Secure workflows with Ubuntu Server'],
                ['title' => 'Network Simulation', 'desc' => 'GNS3 + VMware labs'],
            ],
        ],
        'widana' => [
            'name' => 'Widana',
            'role' => 'Creative Designer',
            'bio' => 'Loves crafting intuitive UI/UX with cultural storytelling.',
            'image' => '/images/widana.png',
            'projects' => [
                ['title' => 'UI Showcase', 'desc' => 'Elegant Tailwind-based layouts'],
                ['title' => 'Infographic Design', 'desc' => 'Icons and visual aids'],
            ],
        ],
        'ardi' => [
            'name' => 'Ardi',
            'role' => 'Backend Engineer',
            'bio' => 'Ensures performance and security behind the scenes.',
            'image' => '/images/ardi.jpeg',
            'projects' => [
                ['title' => 'API Development', 'desc' => 'Robust Laravel REST APIs'],
                ['title' => 'Server Security', 'desc' => 'Best practices in deployment'],
            ],
        ],
    ];

    public function index()
    {
        return view('portfolio.index', ['people' => $this->people]);
    }

    public function show($person)
    {
        if (!array_key_exists($person, $this->people)) {
            abort(404);
        }
        return view('portfolio.show', ['person' => $this->people[$person]]);
    }
}
