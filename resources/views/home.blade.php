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
          <p>Konflikte, herausforderndes Verhalten und Aggression sind relevante Themen im Gesundheits- und Sozialwesen, sowie auch anderen Arbeitsbereichen. Sie fordern heraus, belasten, sind unbequem oder gar bedrohlich. Werden Frühwarnzeichen rechtzeitig erkannt, gibt es verschiedene Möglichkeiten, präventiv zu wirken. Mit Theorie und praktischem Training vermitteln wir die erforderlichen Kompetenzen, um in potenziell eskalierenden Situationen gelassener und professionell zu handeln, und die Integrität des Gegenübers zu wahren. </p>
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
          <x-heading.h3>
            Schulung und Training
          </x-heading.h3>
          <p>Wir unterstützen sie im Lernen und Erweitern ihrer Kompetenzen im Umgang mit herausforderndem Verhalten, Aggression und Gewalt am Arbeitsplatz. Für Institutionen des Gesundheits- und Sozialwesens bieten wir den 3-tägigen Grundkurs (NAGS zertifiziert). Für weitere Bereiche bieten wir auch kürzere Schulungen oder Workshops an.</p>
          <ul>
            <li>verbale und nonverbale Kommunikation</li>
            <li>verbale Deeskalation</li>
            <li>Kompetenzen zum Selbstschutz</li>
            <li>Befreiungs- und Festhaltetechniken</li>
            <li>Risikoanalyse</li>
          </ul>
          <x-heading.h3 class="mt-8 lg:mt-16 xl:mt-24">
            Beratung
          </x-heading.h3>
          <p>Wir beraten sie in klinischen Fragen angepasst auf die individuelle Fallsituation oder Fragestellung:</p>
          <ul>
            <li>Fallbesprechung</li>
            <li>Fachberatung</li>
            <li>Praxisbegleitung</li>
          </ul>
          <x-heading.h3 class="mt-8 lg:mt-16 xl:mt-24">
            Konzeption
          </x-heading.h3>
          <p>Wir unterstützen sie bei Ihren Projekten oder in der Entwicklung eines Konzeptes passend für ihre Institution im Umgang mit herausforderndem Verhalten, Aggression und Gewalt am Arbeitsplatz:</p>
          <ul>
            <li>Projektberatung</li>
            <li>Konzeptberatung</li>
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
          <p>Wir sind ein Team aus erfahrenen Fachpersonen aus den Bereichen Pflege, Psychiatrie, Sozialpädagogik und Sozialarbeit. Wir verfügen über langjährige Erfahrung in der Arbeit mit Menschen mit herausforderndem Verhalten, Aggression und Gewalt. Wir sind ausgebildete Trainerinnen und Trainer für Prävention und Deeskalation und verfügen über eine NAGS Zertifizierung.</p>
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