<?php
/*
Template Name: Sitemap
*/
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo home_url('/'); ?></loc>
    <priority>1.0</priority>
  </url>
  <url>
    <loc><?php echo home_url('/quienes-somos/'); ?></loc>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/'); ?></loc>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#logistica-de-distribucion-inversa/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#envios-terrestres-expresos-nacionales/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#envios-aereos-nacionales/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#transporte-de-especies-valoradas/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#distribucion-dentro-de-santiago/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/servicios/#transporte-de-carga-refrigerada/'); ?></loc>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo home_url('/cobertura/'); ?></loc>
    <priority>0.7</priority>
  </url>
  <url>
    <loc><?php echo home_url('/contacto/'); ?></loc>
    <priority>0.7</priority>
  </url>
  <url>
    <loc><?php echo home_url('/404/'); ?></loc>
    <priority>0.7</priority>
  </url>
</urlset>
