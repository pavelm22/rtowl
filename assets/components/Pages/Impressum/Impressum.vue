<script setup>
import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";
import {ref, watch} from "vue";

const props = defineProps({
  handleMenuClick: {
    type: Function,
    required: true,
  },
  activePage: {
    type: String,
    required: true,
    default: '',
  }
})

const active = ref(false)

// Watch für activePage
watch(() => props.activePage, (newValue, oldValue) => {
  if (newValue === 'impressum') {
    console.log(newValue + oldValue)
    if(newValue !== oldValue) {
      active.value = true
    }
    // Scroll to top
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  } else {
    active.value = false
  }
})
</script>

<template>
  <SlideUpTransition :is-open="active">
    <div class="container mx-auto px-2 sm:px-4 my-24">
      <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold mb-2">Impressum</h1>
        <h2 class="text-xl md:text-2xl">OWL Racing-Team an der Technischen Hochschule Ostwestfalen-Lippe e.V.</h2>
      </div>

      <div class="grid md:grid-cols-2 gap-8 mb-8">
        <div>
          <p class="mb-4">
            Technische Hochschule Ostwestfalen-Lippe <br>
            OWL Racing-Team <br>
            Campusallee 12<br>
            32657 Lemgo<br>
            Germany
          </p>
          <p class="mb-4">
            E-Mail: info@owl-racing-team.de<br>
            Telefon: +49 5261 702 2490<br>
          </p>
          <p>
            Registereintrag: Vereinsregister<br>
            Registergericht: Lemgo<br>
            Registernummer: VR-Nr. 1184<br>
            Umsatzsteuer-ID gemäß §27: 329/5753/0660<br>
          </p>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-2">Vertreten durch:</h3>
          <p class="mb-4">
            1. Vorstand: Paul Hausmann<br>
            2. Vorstand: Jan Luca Hermann<br>
          </p>
          <h3 class="text-lg font-bold mb-2">Technische Umsetzung:</h3>
          <p>
            Marlen Gausmann<br>
            E-Mail: m.gausmann@owl-racing-team.de
          </p>
        </div>
      </div>

      <div class="space-y-6">
        <div>
          <h2 class="text-2xl font-bold mb-2">Haftungsausschluss</h2>
          <h3 class="text-xl font-bold mb-2">I. Inhalt des Onlineangebotes</h3>
          <p class="mb-4">
            Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit
            oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor,
            welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung
            oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und
            unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen,
            sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges
            Verschulden vorliegt.
            Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich
            vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern,
            zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">II. Nutzung der Internetseite</h3>
          <h4 class="text-lg font-bold mb-2">1. Haftung für Inhalte, Hyperlinks</h4>
          <p class="mb-4">
            Für die eigenen Inhalte unserer Seiten sind wir nach den allgemeinen Gesetzen
            verantwortlich. Wir haben die in diesem Internet-Angebot enthaltenen Informationen
            sorgfältig erstellt und sind um laufende Überprüfung bemüht. Dennoch können wir für die
            Richtigkeit, Aktualität, Vollständigkeit und laufende Verfügbarkeit keine Gewähr
            übernehmen. Verbindliche Auskünfte, Beratungen, Empfehlungen oder Erklärungen erteilen
            wir ausschließlich im Rahmen individueller Kommunikation.
            Wir behalten uns vor, unser Internet-Angebot jederzeit zu ändern, zu ergänzen, zu kürzen
            oder auch ganz einzustellen. Wir stehen auch nicht dafür ein, dass Inhalte unseres
            Internet-Angebotes für den Nutzer und seine Zwecke geeignet sind.
            Unser Angebot enthält auch Links zu Webseiten Dritter, auf deren Inhalte wir keinen
            Einfluss haben. Wir machen uns diese Inhalte in keiner Weise zu Eigen und übernehmen für
            sie keine Haftung. Für die Inhalte der verlinkten Seiten ist ausschließlich der
            jeweilige Anbieter der Seiten verantwortlich. Rechtswidrige Inhalte der verlinkten
            Seiten waren für uns nicht erkennbar. Eine jederzeitige nachträgliche inhaltliche
            Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer
            Rechtsverletzung nicht zumutbar. Benachrichtigen Sie uns bitte umgehend, falls Sie über
            unsere Links zu Seiten gelangt sind, deren Inhalte Ihnen bedenklich erscheinen. Sobald
            uns Rechtsverletzungen durch Inhalte der verlinkten Seiten bekannt werden, werden wir
            derartige Links umgehend entfernen. Diese Erklärung gilt für alle auf unseren Seiten
            eingebundenen Links.
          </p>
        </div>
        <div>
          <h3 class="text-xl font-bold mb-2">2 Technische Hinweise</h3>
          <p class="mb-4">
            Bei der Digitalisierung von Daten können Fehler auftreten. Durch die Verwendung
            unterschiedlicher Internet-Browser und bedingt durch individuelle Softwareeinstellungen
            kann es bei der Darstellung der Inhalte zu Abweichungen kommen.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">3 Abrufgebiet</h3>
          <p class="mb-4">
            Unser Internet-Angebot ist für das Gebiet der Bundesrepublik Deutschland bestimmt und
            auf der Grundlage der deutschen Rechtsordnung erstellt. Ein Abruf unseres Angebotes von
            Gebieten außerhalb Deutschlands ist von uns nicht beabsichtigt. Wir übernehmen keine
            Haftung dafür, dass unser Internet-Angebot für Nutzer aus anderen Staaten geeignet,
            verwendbar und dort rechtlich zulässig ist.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">4 Urheberrecht</h3>
          <p class="mb-4">
            Der Inhalt, die Gestaltung und der Aufbau unseres Internet-Angebotes sind
            urheberrechtlich geschützt und wir behalten uns sämtliche Schutzrechte ausdrücklich vor.
            Insbesondere bedürfen die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der
            Verwertung unserer schriftlichen Zustimmung, sofern die Maßnahme nicht nach gesetzlichen
            Vorschriften zustimmungsfrei erlaubt ist. Downloads und Kopien dieser Seiten sind nur
            für den privaten, nicht kommerziellen Gebrauch gestattet. Das Setzen von Hyperlinks auf
            unsere Internetseiten, insbesondere von Deep Links, Inline-Links oder Links in
            Frame-Technologie ist nur mit unserer vorherigen schriftlichen Zustimmung zulässig.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">4 Urheberrecht</h3>
          <p class="mb-4">
            Der Inhalt, die Gestaltung und der Aufbau unseres Internet-Angebotes sind
            urheberrechtlich geschützt und wir behalten uns sämtliche Schutzrechte ausdrücklich vor.
            Insbesondere bedürfen die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der
            Verwertung unserer schriftlichen Zustimmung, sofern die Maßnahme nicht nach gesetzlichen
            Vorschriften zustimmungsfrei erlaubt ist. Downloads und Kopien dieser Seiten sind nur
            für den privaten, nicht kommerziellen Gebrauch gestattet. Das Setzen von Hyperlinks auf
            unsere Internetseiten, insbesondere von Deep Links, Inline-Links oder Links in
            Frame-Technologie ist nur mit unserer vorherigen schriftlichen Zustimmung zulässig.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">III. Informationen zum Datenschutz</h3>
          <p class="mb-4">
            Wir Verfahren bei allen Vorgängen der Datenverarbeitung (z.B. Erhebung, Verarbeitung und
            Übermittlung) nach den gesetzlichen Vorschriften. Die nachfolgende Erklärung gibt Ihnen
            einen Überblick darüber, welche Art von Daten erhoben werden, in welcher Weise diese
            Daten genutzt und weitergegeben werden, welche Sicherheitsmaßnahmen wir zum Schutz Ihrer
            Daten ergreifen und auf welche Art und Weise Sie Auskunft über die uns gegebenen
            Informationen erhalten.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">1 Erhebung und Speicherung personenbezogener Daten</h3>
          <p class="mb-4">
            Personenbezogene Daten sind Einzelangaben über persönliche oder sachliche Verhältnisse
            einer bestimmten oder bestimmbaren natürlichen Person, wie z.B. Ihr Name, Ihre
            Anschrift, Ihre Telefonnummer, Ihr Geburtsdatum, Ihre Bankdaten sowie Ihre IP-Adresse.
            Bei der Nutzung unserer Webseiten werden die folgenden Daten protokolliert, wobei die
            Speicherung ausschließlich internen systembezogenen und statistischen Zwecken dient:
            Namen der aufgerufenen Seiten, des verwendeten Browsers, des Betriebssystems und der
            anfragenden Domain, Datum und Uhrzeit des Zugangs, verwendete Suchmaschinen, Namen
            heruntergeladener Dateien und Ihre IP-Adresse. Sämtliche Daten über die Nutzung,
            insbesondere auch Ihre IP-Adresse, werden frühstmöglich, spätestens unmittelbar nach
            Ende des Nutzungsvorgangs gelöscht.
            Weitergehende personenbezogene Informationen werden nur erfasst, wenn Sie uns diese
            freiwillig zur Verfügung stellen.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">2 Nutzung, Weitergabe und Löschung personenbezogener
            Daten</h3>
          <p class="mb-4">
            Die von Ihnen zur Verfügung gestellten personenbezogenen Daten verwenden wir zur
            Beantwortung Ihrer Anfragen, sowie zum Zweck der technischen Administration der
            Webseiten.
            Eine Weitergabe, ein Verkauf oder eine sonstige Übermittlung Ihrer personenbezogenen
            Daten an Dritte erfolgt nur, wenn Sie der Weitergabe zum Zwecke der Vertragsabwicklung
            ausdrücklich eingewilligt haben. Eine anderweitige Nutzung der Informationen ist nicht
            erlaubt.
            Ferner schließen wir nicht aus, dass wir anonymisierte Nutzungsdaten zu Zwecken der
            Marktforschung übermitteln, zum Beispiel der Überwachung der Seite durch Google
            Analytics. Dabei ist eine Identifikation von Nutzern ausgeschlossen. Wir weisen darauf
            hin, dass wir auf Anordnung der zuständigen Stellen im Einzelfall berechtigt sind,
            Auskunft über Daten zu erteilen, soweit dies für Zwecke der Strafverfolgung, zur
            Gefahrenabwehr durch die Polizeibehörden der Länder, zur Erfüllung der gesetzlichen
            Aufgaben der Verfassungsschutzbehörden des Bundes und der Länder, des
            Bundesnachrichtendienstes oder des Militärischen Abschirmdienstes oder zur Durchsetzung
            der Rechte am geistigen Eigentum erforderlich ist.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">3 Sicherheitshinweis</h3>
          <p class="mb-4">
            Wir haben eine Vielzahl von Sicherheitsmaßnahmen ergriffen, um personenbezogene
            Informationen im angemessenen Umfang und adäquat zu schützen.
            Unsere Datenbanken werden durch physische und technische Maßnahmen sowie
            Verfahrensmaßnahmen geschützt, die den Zugang zu den Informationen auf speziell
            autorisierte Personen in Übereinstimmung mit dieser Datenschutzerklärung einschränken.
            Unser Informationssystem befindet sich hinter einer Software-Firewall, um den Zugang von
            anderen Netzwerken zu unterbinden, die zum Internet in Verbindung stehen. Nur
            Angestellte, die die Informationen benötigen, um eine spezielle Aufgabe zu erfüllen,
            erhalten Zugang zu personenbezogenen Informationen. Unsere Mitarbeiter sind in Bezug auf
            Sicherheit und Datenschutzpraktiken geschult.
            Wenn personenbezogene Informationen über unsere Internetseiten erhoben werden, erfolgt
            die Übertragung verschlüsselt unter Nutzung der Industrie-Standard Secure- Socket-Layer
            („SSL“)-Technologie. Sensible Informationen, wie zum Beispiel Kreditkartennummern oder
            Kontoinformationen werden zum weiteren Schutz verschlüsselt.
            Ihr Passwort für den Zugang zu unseren Internetseiten sollten Sie niemals an Dritte
            weitergeben und Sie sollten dieses Passwort regelmäßig ändern. Wenn Sie unsere Seiten
            verlassen haben, sollten Sie das Log-out bestätigen und Ihren Browser schließen, um zu
            vermeiden, dass nicht autorisierte Benutzer Zugang zu Ihrem Benutzerkonto erhalten.
            Bei einer Kommunikation per E-Mail kann die vollständige Datensicherheit von uns nicht
            gewährleistet werden.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">4 Auskunftsrecht</h3>
          <p class="mb-4">
            Sie haben jederzeit das Recht auf Auskunft über die bezüglich Ihrer Person gespeicherten
            Daten, deren Herkunft und Empfänger sowie den Zweck der Datenverarbeitung. Bei Fragen
            zum Thema Datenschutz können Sie jederzeit an unseren Datenschutzbeauftragten wenden.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">4 Auskunftsrecht</h3>
          <p class="mb-4">
            Sie haben jederzeit das Recht auf Auskunft über die bezüglich Ihrer Person gespeicherten
            Daten, deren Herkunft und Empfänger sowie den Zweck der Datenverarbeitung. Bei Fragen
            zum Thema Datenschutz können Sie jederzeit an unseren Datenschutzbeauftragten wenden.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-bold mb-2">Google-Analytics</h3>
          <p class="mb-4">
            Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc.
            („Google"). Google Analytics verwendet sog. „Cookies", Textdateien, die auf Ihrem
            Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie
            ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser
            Website werden in der Regel an einen Server von Google in den USA übertragen und dort
            gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird
            Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union
            oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum
            zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von
            Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website
            wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um
            Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der
            Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem
            Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser
            übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie
            können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer
            Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall
            gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen
            können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf
            Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die
            Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden
            Link verfügbare Browser-Plugin herunterladen und installieren:
            <a href="http://tools.google.com/dlpage/gaoptout?hl=de" class="text-blue-600 hover:underline" target="_blank">
              http://tools.google.com/dlpage/gaoptout?hl=de
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
        <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
          <button @click="handleMenuClick('impressum')" class="flex gap-2 items-center">
            <div
                class="p-2 rounded-full justify-center w-10 h-10 border-2 border-red-700 flex items-center gap-1 px-3 py-2 text-black hover:bg-red-100 transition-colors">
              <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.7 15.3l-7-7c-.2-.2-.2-.5 0-.7l7-7c.2-.2.5-.2.7 0 .2.2.2.5 0 .7L5.7 8l6.7 6.3c.2.2.2.5 0 .7-.1.2-.4.2-.7 0z"
                    fill="currentColor"/>
              </svg>
            </div>
            <span class="hover:underline hover:duration-300 decoration-red-800">Zurück</span>
          </button>
        </div>
      </div>
    </div>
    <ContactCTA :handleMenuClick="handleMenuClick" />
    <Footer :handleMenuClick="handleMenuClick" />
  </SlideUpTransition>
</template>

<style scoped>

</style>