<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== DEBUGGING RESOURCE REGISTRATION ===\n";

// Get all resource files
$resourcePath = app_path('Filament/Resources');
$resourceFiles = glob($resourcePath . '/*.php');

echo "\nFound resource files:\n";
foreach ($resourceFiles as $file) {
    $className = basename($file, '.php');
    echo "- {$className}.php\n";
}

// Try to load each resource class individually
echo "\nTesting resource classes:\n";

$resources = [
    'CertificationResource',
    'PartnerResource', 
    'TestimonialResource',
    'ContactInquiryResource'
];

foreach ($resources as $resourceClass) {
    $fullClass = "App\\Filament\\Resources\\{$resourceClass}";
    
    echo "\nTesting {$resourceClass}:\n";
    
    try {
        if (class_exists($fullClass)) {
            echo "  - Class exists: Yes\n";
            
            // Test getPages method
            if (method_exists($fullClass, 'getPages')) {
                echo "  - getPages method: Yes\n";
                
                $pages = $fullClass::getPages();
                echo "  - Pages count: " . count($pages) . "\n";
                
                foreach ($pages as $name => $pageClass) {
                    echo "    - {$name}: {$pageClass}\n";
                    
                    // Check if page class exists
                    if (class_exists($pageClass)) {
                        echo "      - Page class exists: Yes\n";
                    } else {
                        echo "      - Page class exists: NO (ERROR)\n";
                    }
                }
            } else {
                echo "  - getPages method: NO (ERROR)\n";
            }
            
            // Test getRelations method
            if (method_exists($fullClass, 'getRelations')) {
                echo "  - getRelations method: Yes\n";
                $relations = $fullClass::getRelations();
                echo "  - Relations: " . json_encode($relations) . "\n";
            } else {
                echo "  - getRelations method: NO\n";
            }
            
        } else {
            echo "  - Class exists: NO (ERROR)\n";
        }
    } catch (Exception $e) {
        echo "  - ERROR: " . $e->getMessage() . "\n";
    }
}

echo "\n=== TESTING FILAMENT PANEL ===\n";

try {
    $panel = \Filament\Facades\Filament::getPanel('admin');
    echo "Panel found: Yes\n";
    
    // Try to get resources
    $panelResources = $panel->getResources();
    echo "Panel resources count: " . count($panelResources) . "\n";
    
    foreach ($panelResources as $resource) {
        echo "- Resource: " . get_class($resource) . "\n";
    }
    
} catch (Exception $e) {
    echo "Panel ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== DEBUG COMPLETE ===\n";
