<h6>TRACCIA PER SVOLGIMENTO PROVA PRATICA TECNICA</h6>

<p>Nella cartella main troverete il file diagramma_er.jpg contenente il diagramma ER richiesto.</p>

<p>Come da richiesta è stato usato Laravel version 9.0</p>

<p><strong>Migrations:</strong> Nella cartella database/migrations troverete le seguenti migrations:</p>
<ul>
    <li>services_table relativa alla sezione Servizi Medici</li>
	<li>points_table relativa alla sezione dei Points</li>
	<li>price_lists_table relativa alle gestione prezzi e Attivazione/Disattivazione dei singoli Servizi abbinati al singolo Point.</li>
	<li>sales_table relativa alla sezione Storico Vendite Articoli.</li>
</ul>
<p><strong>Models:</strong> Nella cartella gest_tecnasoft/app/Models troverete i models richiesti per lo svolgimento della prova.</p>
        <p>Ho deciso di utilizzare i setAttribute per dimostrarne la conoscenza e per creare uniformità nel testo inserito.</p>

Controllers:  Nella cartella /app/Http/Controllers troverete i controllers richiesti per lo svolgimento della prova. 
		      In ogni metodo trovare i commenti IN e OUT dove vengono specificati i parametri in ingresso ed uscita.
		      Ho preferito scrivere il codice per meglio dimostrare le scelte fatte per il miglior funzionamento della prova tecnica.
              L'uso del metodo updateOrCreate è stato scelto rispetto al metodo Create per evitare possibili ridondanze nei Servizi e Point inseriti. 
              <ul>
                <li>PointController CRUD relativo alla sezione Points</li>
                <li>ServiceController CRUD relativo alla sezione Servizi</li>
                <li>PriceListController CRUD relativo alla gestione dei singoli servizi abbinati ai singoli Points.</li>
                  <ul>
              	    <li>Il metodo statusPriceList() è il metodo richiesto per l’attivazione/disattivazione del servizio abbinato al Point. </li>
                    <li>E’ stato fatto uso delle sessioni solo per dimostrarne la conoscenza ed uno dei possibili usi.</li>
                    </ul>
    		    <li>
                  SaleController è un controller invoke relativo allo storico delle singole vendite.</li>
                </ul>


 

