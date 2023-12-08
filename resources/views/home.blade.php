@extends('app')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="md:col-span-2">
        <x-logo class="block w-full max-w-[70px] md:max-w-none h-auto" />
      </x-layout.span>
      <x-layout.span class="md:col-span-10">
        <x-heading.h1>Prävention Deeskalation Training</x-heading.h1>
        <article class="hyphens-auto">
          <p>Aggression, herausforderndes Verhalten, sowie Konflikte am Arbeitsplatz sind relevante Themen im Gesundheits- und Sozialwesen, sowie in anderen Arbeitsfeldern. Diese fordern heraus, belasten, sind unbequem oder gar bedrohlich. Mit Theorie und praktischem Training vermitteln wir die erforderlichen Kompetenzen, um in eskalierenden Situationen professionell, deeskalierend und sicher zu handeln, und dabei die Integrität des Gegenübers zu wahren.</p>
        </article>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="text-white bg-teal">
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="md:col-span-10 md:col-start-3">
        <article class="hyphens-auto">
          <x-heading.h2 class="text-white">
            Angebot
          </x-heading.h2>
          <p>AY! GmbH fördert den professionellen Umgang mit grenzüberschreitendem Verhalten, Aggression und Gewalt am Arbeitsplatz mit Fokus Deeskalation und Prävention. Wir unterstützen Sie mit Theorie und Training im Erweitern Ihrer Kompetenzen in Kommunikation, Prävention, Deeskalation, Selbstschutz und Konfliktmanagement. Wir bieten ein ausgesuchtes Angebot an Schulung, Training, Beratung und Konzeption.</p>
          <x-heading.h3>
            Schulung und Training
          </x-heading.h3>
          <p>Wir bieten Schulungen, Workshops und Trainings, abgestimmt auf Ihre Bedürfnisse zu den Themen:</p>
          <ul>
            <li>verbale und nonverbale Kommunikation</li>
            <li>Prävention</li>
            <li>Konfliktlösung</li>
            <li>sexuelle Belästigung</li>
            <li>Deeskalation (verbale Deeskalation nach ProDeMa&copy;)</li>
            <li>Training zum Selbstschutz</li>
            <li>Befreiungs- und Festhaltetechniken</li>
            <li>Risikoeinschätzung und Dokumentation</li>
          </ul>
          <x-heading.h3 class="mt-8 lg:mt-16 xl:mt-24">Unsere Kurse</x-heading.h3>
          <ul>
            <li>3-Tageskurs (Grundkurs Aggressionsmanagement NAGS)</li>
            <li>2-Tageskurs</li>
            <li>1-Tageskurse</li>
            <li>Workshops und Trainings Individuelle und themenbezogene</li>
          </ul>
          <x-heading.h3 class="mt-8 lg:mt-16 xl:mt-24">
            Beratung
          </x-heading.h3>
          <p>Wir beraten Sie im Umgang mit herausforderndem Verhalten, Aggression oder Konflikten am Arbeitsplatz, zugeschnitten auf Ihre individuelle Fragestellung und auf Ihr Berufsfeld.</p>
          <ul>
            <li>Fachberatung, Fallbesprechung</li>
            <li>Praxisbegleitung, praktisches Training</li>
            <li>Supervision</li>
          </ul>
          <x-heading.h3 class="mt-8 lg:mt-16 xl:mt-24">
            Konzeption
          </x-heading.h3>
          <p>Wir unterstützen Sie bei Ihren Projekten oder in der Konzeptentwicklung zu Deeskalation, Konflikten, Aggressionsmanagement oder Gewaltprävention.</p>
          <ul>
            <li>Projekt- und Konzeptberatung</li>
            <li>Verschriftlichung Konzept</li>
          </ul>
        </article>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>

<x-layout.section>
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="md:col-span-10 md:col-start-3">
        <article class="hyphens-atuo">
          <x-heading.h2>
            Über uns
          </x-heading.h2>
          <p>AY! GmbH besteht aus zwei anerkannte Fachpersonen aus dem Gesundheitswesen, eine Pflegeexpertin APN und eine Fachpsychologin. Wir verfügen über langjährige Praxiserfahrung im Gesundheitswesen, sowie in Schulung und Training von Fachpersonen aus unterschiedlichen Berufsfeldern. Wir sind Expertinnen im Fördern Ihrer Kompetenzen im Umgang mit herausforderndem Verhalten, Aggression und Gewalt am Arbeitsplatz.</p>
          <div class="mt-36 md:mt-48">
            <x-team image="ay-training-anita-stooss" name="Anita Stooss" email="anita.stooss@ay-training.ch">
              <x-cv.anita />
            </x-team>
            <x-team image="ay-training-yugus-uenver" name="Yugus Uenver" email="yugus.uenver@ay-training.ch" class="!mb-0">
              <x-cv.yugus />
            </x-team>
          </div>
        </article>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="text-white bg-magenta">
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="md:col-span-10 md:col-start-3">
        <article class="hyphens-atuo">
          <x-heading.h2 class="text-white">
            Publikationen und Links
          </x-heading.h2>
          <p>Hier finden Sie Publikationen und Links zu von oder mit uns publizierten Artikeln:</p>
          <p><a href="https://www.tandfonline.com/doi/full/10.1080/17518423.2019.1604579" target="_blank" class="underline underline-offset-4 decoration-1 hover:no-underline  block py-2 sm:py-0 mb-4">Meier S., Uenver Y., Stooss A. & Meyer-Heim A. (2020). Frequency, Characteristics and Risk Factors of Aggressive Incidents in a Paediatric Rehabilitation Setting: A Prospective Survey, Developmental Neurorehabilitation, 23:1, 9-17, DOI: 10.1080/17518423.2019.1604579</a></p>

          <p><a href="https://designrr.page/?id=109230&token=4048849102&type=FP&h=9116" target="_blank" class="underline underline-offset-4 decoration-1 hover:no-underline  block py-2 sm:py-0 mb-4">Stooss, A. (2021). Aikido principles in aggression management for care facilities. TAE Journal, The Official Journal of Traditional Aikido Europe, 6th edition. https://designrr.page/?id=109230&token=4048849102&type=FP&h=9116</a></p>

          <p><a href="https://www.hiki.ch/fileadmin/user_upload/redakteure/dateien/Downloads/Bulletins/hiki_Bulletin_2022_web.pdf" target="_blank" class="underline underline-offset-4 decoration-1 hover:no-underline block py-2 sm:py-0 mb-4">Interview mit Yugus Ünver im kiki-Bulletin 2022</a></p>
        </article>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="text-white bg-black !pb-0">
  <x-layout.inner>
    <x-layout.grid>
      <x-layout.span class="md:col-span-10 md:col-start-3">
        <article class="hyphens-auto">
          <x-heading.h2 class="text-white">
            Kontakt
          </x-heading.h2>
          <p>
            Wir freuen uns auf Ihre Kontaktaufnahme!<br>
            <a href="mailto:info@ay-training.ch" class="underline underline-offset-4 decoration-1 hover:no-underline">info@ay-training.ch</a>
          </p>
          <div class="mt-24 md:mt-36 xl:mt-48 pb-24 xl:pb-18 text-sm xl:text-base">
            &copy; AY Training {{ date('Y') }}
          </div>
        </article>
      </x-layout.span>
    </x-layout.grid>
  </x-layout.inner>
</x-layout.section>
@endsection