<script setup>

import SlideUpTransition from "../../SlideUpTransition/SlideUpTransition.vue";
import ContactCTA from "../../CTA/Contact/ContactCTA.vue";
import Footer from "../../Footer/Footer.vue";

const props = defineProps({
  activePage: {
    type: String,
    required: true,
    default: '',
  },
  handleMenuClick: {
    type: Function,
    required: true,
  },
});

</script>

<template>
  <SlideUpTransition :is-open="activePage === 'data_policy'">
    <div class="container mx-auto px-2 sm:px-4 my-24">
      <div class="text-center mb-8">
        <h1 class="text-3xl md:text-4xl font-bold">Datenschutzerklärung</h1>
      </div>

      <div class="space-y-6">
        <div>
          <h2 class="text-xl font-bold mb-2">1. Datenschutz auf einen Blick</h2>
          <h3 class="text-lg font-bold mb-2">Allgemeine Hinweise</h3>
          <p class="mb-4">
            Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen
            Daten passiert, wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit
            denen Sie persönlich identifiziert werden können. Ausführliche Informationen zum Thema
            Datenschutz
            entnehmen Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Datenerfassung auf unserer Website</h3>
          <p class="mb-4">
                        <span
                            class="font-semibold">Wer ist verantwortlich für die Datenerfassung auf dieser Website?</span><br>
            Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten
            können Sie dem Impressum dieser Website entnehmen.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Wie erfassen wir Ihre Daten?</h3>
          <p class="mb-4">
            Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich
            z.B. um Daten handeln, die Sie in ein Kontaktformular eingeben.
            Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst. Das
            sind vor allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit des
            Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website
            betreten.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Wofür nutzen wir Ihre Daten?</h3>
          <p class="mb-4">
            Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu
            gewährleisten.
            Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Welche Rechte haben Sie bezüglich Ihrer Daten?</h3>
          <p class="mb-4">
            Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer
            gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die
            Berichtigung,
            Sperrung oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema
            Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.
            Des
            Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Analyse-Tools und Tools von Drittanbietern</h3>
          <p class="mb-4">
            Beim Besuch unserer Website kann Ihr Surf-Verhalten statistisch ausgewertet werden. Das
            geschieht
            vor allem mit Cookies und mit sogenannten Analyseprogrammen. Die Analyse Ihres Surf-Verhaltens
            erfolgt in der Regel anonym; das Surf-Verhalten kann nicht zu Ihnen zurückverfolgt werden. Sie
            können dieser Analyse widersprechen oder sie durch die Nichtbenutzung bestimmter Tools
            verhindern.
            Detaillierte Informationen dazu finden Sie in der folgenden Datenschutzerklärung.
            Sie können dieser Analyse widersprechen. Über die Widerspruchsmöglichkeiten werden wir Sie in
            dieser
            Datenschutzerklärung informieren.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">2. Allgemeine Hinweise und Pflichtinformationen Datenschutz</h3>
          <p class="mb-4">
            Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln
            Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen
            Datenschutzvorschriften
            sowie dieser Datenschutzerklärung.
            Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben.
            Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die
            vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen.
            Sie
            erläutert auch, wie und zu welchem Zweck das geschieht.
            Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per
            E-Mail)
            Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte
            ist
            nicht möglich.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Hinweis zur verantwortlichen Stelle</h3>
          <p class="mb-4">
            Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:

            OWL Racing-Team an der Technischen Hochschule Ostwestfalen-Lippe e.V.
            Technische Hochschule Ostwestfalen-Lippe
            OWL Racing-Team
            Campusallee 12
            32657 Lemgo
            Germany

            Vertreten durch:
            1. Vorstand: Fabian Tapper
            2. Vorstand: Jan Luca Hermann

            E-Mail: info@owl-racing-team.de
            Telefon: +49 5261 702 2490

            Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit
            anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen,
            E-Mail-Adressen o. Ä.) entscheidet.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Widerruf Ihrer Einwilligung zur Datenverarbeitung</h3>
          <p class="mb-4">
            Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie
            können
            eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung
            per
            E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom
            Widerruf unberührt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Beschwerderecht bei der zuständigen Aufsichtsbehörde</h3>
          <p class="mb-4">
            Im Falle datenschutzrechtlicher Verstöße steht dem Betroffenen ein Beschwerderecht bei der
            zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde in datenschutzrechtlichen Fragen
            ist
            der Landesdatenschutzbeauftragte des Bundeslandes, in dem unser Unternehmen seinen Sitz hat.
            Eine
            Liste der Datenschutzbeauftragten sowie deren Kontaktdaten können folgendem Link entnommen
            werden:
            https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Recht auf Datenübertragbarkeit</h3>
          <p class="mb-4">
            Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines
            Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen,
            maschinenlesbaren Format aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an
            einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">SSL- bzw. TLS-Verschlüsselung</h3>
          <p class="mb-4">
            Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte,
            wie
            zum Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine
            SSL-bzw.
            TLS-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des
            Browsers von “http://” auf “https://” wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.
            Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns
            übermitteln,
            nicht von Dritten mitgelesen werden.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Auskunft, Sperrung, Löschung</h3>
          <p class="mb-4">
            Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf
            unentgeltliche
            Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den
            Zweck
            der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten.
            Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter
            der
            im Impressum angegebenen Adresse an uns wenden.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Widerspruch gegen Werbe-Mails</h3>
          <p class="mb-4">
            Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur Übersendung
            von
            nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit widersprochen.
            Die
            Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten
            Zusendung von Werbeinformationen, etwa durch Spam-E-Mails, vor.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">3. Datenerfassung auf unserer Website Cookies</h3>
          <p class="mb-4">
            Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner
            keinen
            Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher,
            effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner
            abgelegt
            werden und die Ihr Browser speichert.
            Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie werden nach
            Ende
            Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert bis
            Sie
            diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch
            wiederzuerkennen.
            Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden
            und
            Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell
            ausschließen sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren.
            Bei
            der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.
            Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs oder zur Bereitstellung
            bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorbfunktion) erforderlich sind, werden
            auf
            Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der Websitebetreiber hat ein berechtigtes
            Interesse an der Speicherung von Cookies zur technisch fehlerfreien und optimierten
            Bereitstellung
            seiner Dienste. Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens)
            gespeichert
            werden, werden diese in dieser Datenschutzerklärung gesondert behandelt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Server-Log-Dateien</h3>
          <p class="mb-4">
            Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten
            Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:
            • Browsertyp und Browserversion
            • verwendetes Betriebssystem
            • Referrer URL
            • Hostname des zugreifenden Rechners
            • Uhrzeit der Serveranfrage
            • IP-Adresse
            Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.
            Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von
            Daten
            zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Kontaktformular</h3>
          <p class="mb-4">
            Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem
            Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der
            Anfrage
            und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre
            Einwilligung weiter.
            Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt somit ausschließlich auf
            Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie können diese Einwilligung
            jederzeit
            widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis
            zum
            Widerruf erfolgten Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.
            Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung
            auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung
            entfällt (z.B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche
            Bestimmungen –
            insbesondere Aufbewahrungsfristen – bleiben unberührt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Registrierung auf dieser Website</h3>
          <p class="mb-4">
            Registrierung auf dieser Website
            Sie können sich auf unserer Website registrieren, um zusätzliche Funktionen auf der Seite zu
            nutzen.
            Die dazu eingegebenen Daten verwenden wir nur zum Zwecke der Nutzung des jeweiligen Angebotes
            oder
            Dienstes, für den Sie sich registriert haben. Die bei der Registrierung abgefragten
            Pflichtangaben
            müssen vollständig angegeben werden. Anderenfalls werden wir die Registrierung ablehnen.
            Für wichtige Änderungen etwa beim Angebotsumfang oder bei technisch notwendigen Änderungen
            nutzen
            wir die bei der Registrierung angegebene E-Mail-Adresse, um Sie auf diesem Wege zu informieren.
            Die Verarbeitung der bei der Registrierung eingegebenen Daten erfolgt auf Grundlage Ihrer
            Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie können eine von Ihnen erteilte Einwilligung
            jederzeit
            widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der
            bereits
            erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.
            Die bei der Registrierung erfassten Daten werden von uns gespeichert, solange Sie auf unserer
            Website registriert sind und werden anschließend gelöscht. Gesetzliche Aufbewahrungsfristen
            bleiben
            unberührt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Verarbeiten von Daten (Kunden- und Vertragsdaten)</h3>
          <p class="mb-4">
            Wir erheben, verarbeiten und nutzen personenbezogene Daten nur, soweit sie für die Begründung,
            inhaltliche Ausgestaltung oder Änderung des Rechtsverhältnisses erforderlich sind
            (Bestandsdaten).
            Dies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur
            Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet. Personenbezogene Daten über
            die
            Inanspruchnahme unserer Internetseiten (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur,
            soweit dies erforderlich ist, um dem Nutzer die Inanspruchnahme des Dienstes zu ermöglichen oder
            abzurechnen.
            Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder Beendigung der
            Geschäftsbeziehung
            gelöscht. Gesetzliche Aufbewahrungsfristen bleiben unberührt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Datenübermittlung bei Vertragsschluss für Online-Shops, Händler
            und
            Warenversand</h3>
          <p class="mb-4">
            Wir übermitteln personenbezogene Daten an Dritte nur dann, wenn dies im Rahmen der
            Vertragsabwicklung notwendig ist, etwa an die mit der Lieferung der Ware betrauten Unternehmen
            oder
            das mit der Zahlungsabwicklung beauftragte Kreditinstitut. Eine weitergehende Übermittlung der
            Daten
            erfolgt nicht bzw. nur dann, wenn Sie der Übermittlung ausdrücklich zugestimmt haben. Eine
            Weitergabe Ihrer Daten an Dritte ohne ausdrückliche Einwilligung, etwa zu Zwecken der Werbung,
            erfolgt nicht.
            Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von
            Daten
            zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">4. Soziale Medien</h3>
          <h3 class="text-lg font-bold mb-2">Facebook-Plugins (Like & Share-Button)</h3>
          <p class="mb-4">
            Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook, Anbieter Facebook Inc., 1
            Hacker
            Way, Menlo Park, California 94025, USA, integriert. Die Facebook-Plugins erkennen Sie an dem
            Facebook-Logo oder dem „Like-Button“ („Gefällt mir“) auf unserer Seite. Eine Übersicht über die
            Facebook-Plugins finden Sie hier: https://developers.facebook.com/docs/plugins/.
            Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem
            Browser
            und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer
            IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook „Like-Button“ anklicken während Sie
            in
            Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem
            Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto
            zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der
            übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu
            finden
            Sie in der Datenschutzerklärung von Facebook unter: https://de-de.facebook.com/policy.php.
            Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto
            zuordnen
            kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Twitter Plugin</h3>
          <p class="mb-4">
            Auf unseren Seiten sind Funktionen des Dienstes Twitter eingebunden. Diese Funktionen werden
            angeboten durch die Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA.
            Durch
            das Benutzen von Twitter und der Funktion „Re-Tweet“ werden die von Ihnen besuchten Websites mit
            Ihrem Twitter-Account verknüpft und anderen Nutzern bekannt gegeben. Dabei werden auch Daten an
            Twitter übertragen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom
            Inhalt der übermittelten Daten sowie deren Nutzung durch Twitter erhalten. Weitere Informationen
            hierzu finden Sie in der Datenschutzerklärung von Twitter unter: https://twitter.com/privacy.
            Ihre Datenschutzeinstellungen bei Twitter können Sie in den Konto-Einstellungen unter
            https://twitter.com/account/settings ändern.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Instagram Plugin</h3>
          <p class="mb-4">
            Auf unseren Seiten sind Funktionen des Dienstes Instagram eingebunden. Diese Funktionen werden
            angeboten durch die Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA integriert.
            Wenn Sie in Ihrem Instagram-Account eingeloggt sind, können Sie durch Anklicken des
            Instagram-Buttons die Inhalte unserer Seiten mit Ihrem Instagram-Profil verlinken. Dadurch kann
            Instagram den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass
            wir
            als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung
            durch
            Instagram erhalten.
            Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Instagram:
            https://instagram.com/about/legal/privacy/.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Google Analytics</h3>
          <p class="mb-4">
            Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google
            Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.
            Google Analytics verwendet so genannte „Cookies“. Das sind Textdateien, die auf Ihrem Computer
            gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die
            durch
            den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an
            einen
            Server von Google in den USA übertragen und dort gespeichert.
            Die Speicherung von Google-Analytics-Cookies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f
            DSGVO.
            Der Websitebetreiber hat ein berechtigtes Interesse an der Analyse des Nutzerverhaltens, um
            sowohl
            sein Webangebot als auch seine Werbung zu optimieren.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">IP Anonymisierung</h3>
          <p class="mb-4">
            Wir haben auf dieser Website die Funktion IP-Anonymisierung aktiviert. Dadurch wird Ihre
            IP-Adresse
            von Google innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten
            des
            Abkommens über den Europäischen Wirtschaftsraum vor der Übermittlung in die USA gekürzt. Nur in
            Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und
            dort
            gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um
            Ihre
            Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um
            weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem
            Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte
            IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Browser Plugin</h3>
          <p class="mb-4">
            Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer
            Browser-Software
            verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht
            sämtliche
            Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die
            Erfassung der durch den Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl.
            Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem
            Sie
            das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren:
            https://tools.google.com/dlpage/gaoptout?hl=de.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Widerspruch gegen Datenerfassung</h3>
          <p class="mb-4">
            Sie können die Erfassung Ihrer Daten durch Google Analytics verhindern, indem Sie auf folgenden
            Link
            klicken. Es wird ein Opt-Out-Cookie gesetzt, der die Erfassung Ihrer Daten bei zukünftigen
            Besuchen
            dieser Website verhindert: Google Analytics deaktivieren.
            Mehr Informationen zum Umgang mit Nutzerdaten bei Google Analytics finden Sie in der
            Datenschutzerklärung von Google: https://support.google.com/analytics/answer/6004245?hl=de.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Auftragsdatenverarbeitung</h3>
          <p class="mb-4">
            Wir haben mit Google einen Vertrag zur Auftragsdatenverarbeitung abgeschlossen und setzen die
            strengen Vorgaben der deutschen Datenschutzbehörden bei der Nutzung von Google Analytics
            vollständig
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Demografische Merkmale bei Google Analytics</h3>
          <p class="mb-4">
            Diese Website nutzt die Funktion “demografische Merkmale” von Google Analytics. Dadurch können
            Berichte erstellt werden, die Aussagen zu Alter, Geschlecht und Interessen der Seitenbesucher
            enthalten. Diese Daten stammen aus interessenbezogener Werbung von Google sowie aus
            Besucherdaten
            von Drittanbietern. Diese Daten können keiner bestimmten Person zugeordnet werden. Sie können
            diese
            Funktion jederzeit über die Anzeigeneinstellungen in Ihrem Google-Konto deaktivieren oder die
            Erfassung Ihrer Daten durch Google Analytics wie im Punkt “Widerspruch gegen Datenerfassung”
            dargestellt generell untersagen.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Facebook Pixel</h3>
          <p class="mb-4">
            Unsere Website nutzt zur Konversionsmessung das Besucheraktions-Pixel von Facebook, Facebook
            Inc.,
            1601 S. California Ave, Palo Alto, CA 94304, USA (“Facebook”).
            So kann das Verhalten der Seitenbesucher nachverfolgt werden, nachdem diese durch Klick auf eine
            Facebook-Werbeanzeige auf die Website des Anbieters weitergeleitet wurden. Dadurch können die
            Wirksamkeit der Facebook-Werbeanzeigen für statistische und Marktforschungszwecke ausgewertet
            werden
            und zukünftige Werbemaßnahmen optimiert werden.
            Die erhobenen Daten sind für uns als Betreiber dieser Website anonym, wir können keine
            Rückschlüsse
            auf die Identität der Nutzer ziehen. Die Daten werden aber von Facebook gespeichert und
            verarbeitet,
            sodass eine Verbindung zum jeweiligen Nutzerprofil möglich ist und Facebook die Daten für eigene
            Werbezwecke, entsprechend der Facebook-Datenverwendungsrichtlinie verwenden kann. Dadurch kann
            Facebook das Schalten von Werbeanzeigen auf Seiten von Facebook sowie außerhalb von Facebook
            ermöglichen. Diese Verwendung der Daten kann von uns als Seitenbetreiber nicht beeinflusst
            werden.
            In den Datenschutzhinweisen von Facebook finden Sie weitere Hinweise zum Schutz Ihrer
            Privatsphäre:
            <a href="https://www.facebook.com/about/privacy/."
               target="_blank">https://www.facebook.com/about/privacy/.</a>
            Sie können außerdem die Remarketing-Funktion “Custom Audiences” im Bereich Einstellungen für
            Werbeanzeigen unter <a
              href="https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen"
              target="_blank">https://www.facebook.com/ads/preferences/?entry_product=ad_settings_screen</a>
            deaktivieren. Dazu müssen Sie bei Facebook angemeldet sein.
            deaktivieren. Dazu müssen Sie bei Facebook angemeldet sein.
            Wenn Sie kein Facebook Konto besitzen, können Sie nutzungsbasierte Werbung von Facebook auf der
            Website der European Interactive Digital Advertising Alliance deaktivieren:
            <a href="http://www.youronlinechoices.com/de/praferenzmanagement/."
               target="_blank">http://www.youronlinechoices.com/de/praferenzmanagement/.</a>

          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">5. Newsletter & Newsletterdaten</h3>
          <p class="mb-4">
            Wenn Sie den auf der Website angebotenen Newsletter beziehen möchten, benötigen wir von Ihnen
            eine
            E-Mail-Adresse sowie Informationen, welche uns die Überprüfung gestatten, dass Sie der Inhaber
            der
            angegebenen E-Mail-Adresse sind und mit dem Empfang des Newsletters einverstanden sind. Weitere
            Daten werden nicht bzw. nur auf freiwilliger Basis erhoben. Diese Daten verwenden wir
            ausschließlich
            für den Versand der angeforderten Informationen und geben diese nicht an Dritte weiter.
            Die Verarbeitung der in das Newsletteranmeldeformular eingegebenen Daten erfolgt ausschließlich
            auf
            Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die erteilte Einwilligung zur
            Speicherung
            der Daten, der E-Mail-Adresse sowie deren Nutzung zum Versand des Newsletters können Sie
            jederzeit
            widerrufen, etwa über den „Austragen“-Link im Newsletter. Die Rechtmäßigkeit der bereits
            erfolgten
            Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.
            Die von Ihnen zum Zwecke des Newsletter-Bezugs bei uns hinterlegten Daten werden von uns bis zu
            Ihrer Austragung aus dem Newsletter gespeichert und nach der Abbestellung des Newsletters
            gelöscht.
            Daten, die zu anderen Zwecken bei uns gespeichert wurden (z.B. E-Mail-Adressen für den
            Mitgliederbereich) bleiben hiervon unberührt.
          </p>
        </div>
        <!-- More sections... -->

        <div>
          <h2 class="text-xl font-bold mb-2">7. Plugins und Tools YouTube</h2>
          <p class="mb-4">
            Unsere Website nutzt Plugins der von Google betriebenen Seite YouTube. Betreiber der Seiten ist
            die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA.
            Wenn Sie eine unserer mit einem YouTube-Plugin ausgestatteten Seiten besuchen, wird eine
            Verbindung zu den Servern von YouTube hergestellt. Dabei wird dem YouTube-Server mitgeteilt,
            welche unserer
            Seiten Sie besucht haben.
            Wenn Sie in Ihrem YouTube-Account eingeloggt sind, ermöglichen Sie YouTube, Ihr Surfverhalten
            direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie verhindern, indem Sie sich aus
            Ihrem
            YouTube-Account ausloggen.
            Die Nutzung von YouTube erfolgt im Interesse einer ansprechenden Darstellung unserer
            Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO
            dar.
            Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von
            YouTube unter: https://www.google.de/intl/de/policies/privacy.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Google Web Fonts</h3>
          <p class="mb-4">
            Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von
            Google bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die benötigten Web Fonts
            in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen.
            Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google
            aufnehmen. Hierdurch erlangt Google Kenntnis darüber, dass über Ihre IP-Adresse unsere Website
            aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und
            ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im
            Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.
            Wenn Ihr Browser Web Fonts nicht unterstützt, wird eine Standardschrift von Ihrem Computer
            genutzt.
            Weitere Informationen zu Google Web Fonts finden Sie unter
            <a href="https://developers.google.com/fonts/faq" class="text-blue-600 hover:underline"
               target="_blank">https://developers.google.com/fonts/faq</a>
            und in der Datenschutzerklärung von Google:
            <a href="https://www.google.com/policies/privacy/" class="text-blue-600 hover:underline"
               target="_blank">https://www.google.com/policies/privacy/</a>.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Google Maps</h3>
          <p class="mb-4">
            Diese Seite nutzt über eine API den Kartendienst Google Maps. Anbieter ist die Google Inc., 1600
            Amphitheatre Parkway, Mountain View, CA 94043, USA.
            Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP Adresse zu speichern. Diese
            Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort
            gespeichert. Der Anbieter dieser Seite hat keinen Einfluss auf diese Datenübertragung.
            Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden Darstellung unserer
            Online-Angebote und an einer leichten Auffindbarkeit der von uns auf der Website angegebenen
            Orte. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.
            Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der Datenschutzerklärung von Google:
            <a href="https://www.google.de/intl/de/policies/privacy/" class="text-blue-600 hover:underline"
               target="_blank">https://www.google.de/intl/de/policies/privacy/</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 z-50 pointer-events-auto">
        <button @click="handleMenuClick('data_policy')" class="flex gap-2 items-center">
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
    <ContactCTA :handleMenuClick="handleMenuClick" />
    <Footer :handleMenuClick="handleMenuClick"/>
  </SlideUpTransition>
</template>

<style scoped>

</style>