@extends('web.app')
@section('content')
<x-layout.header />
<x-layout.inner class="hyphens-auto">
  <h1 class="font-serif font-bold text-lg md:text-xl lg:text-2xl xl:text-3xl text-black leading-7 mb-8 lg:mb-16 xl:mb-24">
    Prävention Deeskalation Training
  </h1>
  <article class="mb-24 md:mb-32 xl:mb-48">
    <p>Konflikte, herausforderndes Verhalten und Aggression sind relevante Themen im Gesundheits- und Sozialwesen, sowie auch anderen Arbeitsbereichen. Sie fordern heraus, belasten, sind unbequem oder gar bedrohlich. Werden Frühwarnzeichen rechtzeitig erkannt, gibt es verschiedene Möglichkeiten, präventiv zu wirken. Mit Theorie und praktischem Training vermitteln wir die erforderlichen Kompetenzen, um in potenziell eskalierenden Situationen gelassener und professionell zu handeln, und die Integrität des Gegenübers zu wahren. </p>
  </article>
  <article class="mb-24 md:mb-32 xl:mb-48">
    <x-heading.h2>
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
  <article class="mb-24 md:mb-32 xl:mb-48">
    <x-heading.h2>
      Über uns
    </x-heading.h2>
    <p>Wir sind ein Team aus erfahrenen Fachpersonen aus den Bereichen Pflege, Psychiatrie, Sozialpädagogik und Sozialarbeit. Wir verfügen über langjährige Erfahrung in der Arbeit mit Menschen mit herausforderndem Verhalten, Aggression und Gewalt. Wir sind ausgebildete Trainerinnen und Trainer für Prävention und Deeskalation und verfügen über eine NAGS Zertifizierung.</p>
    <div class="mt-24 md:mt-32 xl:mt-36">
      <x-team image="ay-training-anita-stooss" name="Anita Stooss" email="anita.stooss@ay-training.ch">
      </x-team>
      <x-team image="ay-training-yugus-uenver" name="Yugus Uenver" email="yugus.uenver@ay-training.ch">
      </x-team>
    </div>
  </article>
</x-layout.inner>
@endsection