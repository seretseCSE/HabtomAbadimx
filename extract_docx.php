<?php
function extractDocxText($file) {
    $zip = new ZipArchive();
    if ($zip->open($file) === TRUE) {
        $xml = $zip->getFromName('word/document.xml');
        $zip->close();
        if ($xml) {
            $dom = new DOMDocument();
            $dom->loadXML($xml);
            $text = '';
            foreach ($dom->getElementsByTagName('t') as $node) {
                $text .= $node->nodeValue;
            }
            return $text;
        }
    }
    return 'Failed to read';
}

file_put_contents('doc2.txt', extractDocxText('Company Profile (2).docx'));
file_put_contents('doc_old.txt', extractDocxText('Company Profile Old.docx'));
echo "Done\n";
