<?php

return [
    'fabianmichael.meta.tab.label' => 'Metadata (SEO)',
    'fabianmichael.meta.page_title.placeholder' => 'Sidetitel',
    'fabianmichael.meta.title_preview.label' => 'Titel forhåndsvisning',
    'fabianmichael.meta.global_settings.headline' => ' Globale indstillinger',
    'fabianmichael.meta.global_general.headline' => 'Generelle indstillinger',
    'fabianmichael.meta.general.headline' => 'Grundlæggende meta information',
    'fabianmichael.meta.title.label' => 'Titel (Tilsidesæt)',
    'fabianmichael.meta.title.help' => 'Sidens titel som den skal vises på søgemaskiner. Hvis dette felt er tomt, vil Kirby sidens titel blive brugt som standard.',
    'fabianmichael.meta.title_separator.label' => 'Titel Separator',
    'fabianmichael.meta.title_separator.help' => 'Separator der vises mellem side og webstedets titel.',

    'fabianmichael.meta.robots.headline' => 'Søgemaskiner',
    'fabianmichael.meta.robots.help' => 'Detaljerede instruktioner til hvordan søgemaskiner skal håndtere denne side.',
    'fabianmichael.meta.robots_index.label' => 'Indeksering',
    'fabianmichael.meta.robots_index.help' => 'Søgemaskiner må indeksere denne side.',
    'fabianmichael.meta.robots_follow.label' => 'Følg links',
    'fabianmichael.meta.robots_follow.help' => 'Søgemaskiner vil følge links på denne side.',
    'fabianmichael.meta.robots_archive.label' => 'Arkivering',
    'fabianmichael.meta.robots_archive.help' => 'Søgemaskiner vil gemme denne side i cache.',
    'fabianmichael.meta.robots_imageindex.label' => 'Billedindeksering',
    'fabianmichael.meta.robots_imageindex.help' => 'Søgemaskiner vil associere denne side med billedsøgeresultater.',
    'fabianmichael.meta.robots_snippet.label' => 'Uddrag',
    'fabianmichael.meta.robots_snippet.help' => 'Søgemaskiner vil vise beskrivelsesuddrag for denne side.',

    'fabianmichael.meta.global_robots.headline' => 'Søgemaskine indstillinger',
    'fabianmichael.meta.global_robots.help' => 'Detaljerede instruktioner til hvordan søgemaskiner skal håndtere sider på dette websted som standard. Sider kan have individuelle indstillinger for at tilsidesætte disse standarder.',
    'fabianmichael.meta.global_robots_index.label' => 'Indeksering',
    'fabianmichael.meta.global_robots_index.help' => 'Søgemaskiner må indeksere dette websted.',
    'fabianmichael.meta.global_robots_follow.label' => 'Følg links',
    'fabianmichael.meta.global_robots_follow.help' => 'Søgemaskiner vil følge links på dette websted.',
    'fabianmichael.meta.global_robots_archive.label' => 'Arkivering',
    'fabianmichael.meta.global_robots_archive.help' => 'Søgemaskiner vil gemme sider på dette websted i cache.',
    'fabianmichael.meta.global_robots_imageindex.label' => 'Billedindeksering',
    'fabianmichael.meta.global_robots_imageindex.help' => 'Søgemaskiner vil associere sider med billedsøgeresultater.',
    'fabianmichael.meta.global_robots_snippet.label' => 'Uddrag',
    'fabianmichael.meta.global_robots_snippet.help' => 'Søgemaskiner vil vise beskrivelsesuddrag for sider.',

    'fabianmichael.meta.description.label' => 'Beskrivelse',
    'fabianmichael.meta.description.help' => 'En kort beskrivelse af siden der vil blive vist under sidens titel af søgemaskiner.',
    'fabianmichael.meta.global_description.help' => 'Den globale beskrivelse vil blive brugt som fallback for alle sider, der ikke har en dedikeret beskrivelse.',
    'fabianmichael.meta.canonical_url.label' => 'Kanonisk URL',
    'fabianmichael.meta.canonical_url.help' => 'Sidenes kanoniske URL. Hvis dette felt er tomt, vil sidens URL blive brugt som standard.',
    'fabianmichael.meta.global_default_value.label' => 'Websted ({ tilstand })',
    'fabianmichael.meta.config_default_value.label' => 'Konfiguration ({ tilstand })',
    'fabianmichael.meta.state.on' => 'tændt',
    'fabianmichael.meta.state.off' => 'slukket',
    'fabianmichael.meta.state.unset' => 'ikke indstillet',
    'fabianmichael.meta.og.headline' => 'Deling på sociale medier',
    'fabianmichael.meta.og.help' => '[Open Graph](https://ogp.me/) metadata bruges af sociale netværk (f.eks. Facebook, Twitter) og de fleste beskedapps (f.eks. Signal, Telegram, iMessage).',
    'fabianmichael.meta.og_site_name.label' => 'Del webstedets navn',
    'fabianmichael.meta.og_site_name.help' => 'Navnet der skal vises for hele webstedet til deling på sociale medier. Hvis ikke indstillet, vil webstedets titel blive brugt som fallback.',
    'fabianmichael.meta.global_og_image.label' => 'Standard delingsbillede',
    'fabianmichael.meta.global_og_image.help' => 'Et billede der skal repræsentere dine delte links på sociale medier og apps. Billedet vil automatisk blive beskåret. Dette globale billede bruges som fallback for sider der ikke har et dedikeret billede.<br><br>**Anbefalet størrelse:** 1200&thinsp;&times;&thinsp;630&nbsp;px<br>**Formater:** JPEG, PNG, GIF, WebP, AVIF',
    'fabianmichael.meta.og_image.label' => 'Delingsbillede',
    'fabianmichael.meta.og_image.help' => 'Et billede der skal repræsentere dine delte links på sociale medier og apps. Billedet vil automatisk blive beskåret. Det globale fallback-billede vil blive brugt som fallback.<br><br>**Anbefalet størrelse:** 1200&thinsp;&times;&thinsp;630&nbsp;px<br>**Formater:** JPEG, PNG, GIF, WebP, AVIF {< site.metaPanelWarning("no_og_image_fallback") >}',
    'fabianmichael.meta.og_title.label' => 'Delingstitel (tilsidesæt)',
    'fabianmichael.meta.og_title.help' => 'Sidens titel som den vil blive vist ved deling. Hvis ikke indstillet, vil både **Titel (Tilsidesæt)** og sidens titel blive brugt som fallback.',
    'fabianmichael.meta.og_description.label' => 'Delingsbeskrivelse',
    'fabianmichael.meta.og_description.help' => 'En en til to sætningers beskrivelse af objektet. Sidens beskrivelse og webstedets beskrivelse vil blive brugt som fallbacks.',

    'fabianmichael.meta.image.empty' => 'Ingen billede valgt endnu',
    'fabianmichael.meta.files.headline' => 'Filer',

    'fabianmichael.meta.sitemap.priority.label' => 'Sitemap prioritet',
    'fabianmichael.meta.sitemap.priority.help' => 'Relativ prioritet i forhold til andre sider på dit websted.',
    'fabianmichael.meta.sitemap.global_priority.help' => 'Standard prioritet for alle sider på dette websted. At indstille en prioritet giver en indikation til søgemaskiner om den relative vigtighed af dine sider i forhold til hinanden.',
    'fabianmichael.meta.sitemap.changefreq.label' => 'Ændringsfrekvens',
    'fabianmichael.meta.sitemap.changefreq.help' => 'Fortæller søgemaskiner hvor ofte indholdet ændrer sig.',
    'fabianmichael.meta.sitemap.changefreq.always' => 'Altid',
    'fabianmichael.meta.sitemap.changefreq.hourly' => 'Hver time',
    'fabianmichael.meta.sitemap.changefreq.daily' => 'Dagligt',
    'fabianmichael.meta.sitemap.changefreq.weekly' => 'Ugentligt',
    'fabianmichael.meta.sitemap.changefreq.monthly' => 'Månedligt',
    'fabianmichael.meta.sitemap.changefreq.yearly' => 'Årligt',
    'fabianmichael.meta.sitemap.changefreq.never' => 'Aldrig',

    'fabianmichael.meta.twitter.headline' => 'Twitter',
    'fabianmichael.meta.twitter.site.label' => 'Twitter brugernavn for webstedet',
    'fabianmichael.meta.twitter.creator.label' => 'Twitter brugernavn for indholdsopretter',

    'fabianmichael.meta.no_og_image_fallback' => 'Intet globalt fallback-billede defineret. Gå til <a href="{ link }">globale metadata indstillinger</a> og upload et.',

    'fabianmichael.meta.schema.person_privacy_notice.label' => 'Privatlivsmeddelelse',
    'fabianmichael.meta.schema.person_privacy_notice.text' => 'Ved at vælge en bruger vil du eksponere personlige oplysninger som e-mailadresse og profilbillede for søgemaskiner, andre webcrawler og alle der læser kildekoden på din hjemmeside.',
    'fabianmichael.meta.sharing_preview.headline' => 'Del forhåndsvisning',
    'fabianmichael.meta.description_missing' => '[Delingsbeskrivelse og fallback-beskrivelse mangler]',
    'fabianmichael.meta.source.og_image' => 'Kilde: Delingsbillede',
    'fabianmichael.meta.source.metadata' => 'Kilde: Side miniaturebillede',
    'fabianmichael.meta.source.site' => 'Kilde: Fallback miniaturebillede',
    'fabianmichael.meta.og_image.missing' => 'Billede mangler',

    'fabianmichael.meta.schema.headline' => 'Strukturerede data',
    'fabianmichael.meta.schema.help' => 'Disse data er baseret på [Schema.org](https://schema.org) standarden og kan opfanges af søgemaskiner som [Googles](https://google.com) videngrafik for en bedre forståelse af din organisation eller person.',
    'fabianmichael.meta.schema.website_owner.label' => 'Webstedsejer',
    'fabianmichael.meta.schema.website_owner.help' => 'Vælg om dit websted repræsenterer en organisation eller enkeltperson.',
    'fabianmichael.meta.schema.org_name.label' => 'Organisationsnavn',
    'fabianmichael.meta.schema.org_logo.label' => 'Organisationslogo',
    'fabianmichael.meta.schema.meta_person.label' => 'Person',
    'fabianmichael.meta.schema.meta_person.empty' => 'Ingen bruger valgt endnu',
    'fabianmichael.meta.schema.meta_person.help' => 'Vælg en bruger der repræsenterer dette websted.',

    'fabianmichael.meta.status.label' => 'Status',
    'fabianmichael.meta.search_engines.visibility.visible' => 'Synlig',
    'fabianmichael.meta.search_engines.visibility.hidden' => 'Skjult',
    'fabianmichael.meta.search_engines.visibility.label' => 'Søgemaskine synlighed',
    'fabianmichael.meta.search_engines.visibility.yes' => 'Denne side indekseres af søgemaskiner og kan vises i søgeresultaterne',
    'fabianmichael.meta.search_engines.visibility.no' => 'Denne side er skjult fra søgeresultaterne',
];
