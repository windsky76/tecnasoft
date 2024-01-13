TRACCIA PER SVOLGIMENTO PROVA PRATICA TECNICA

Nella cartella gest_tecnasoft troverete il file diagramma_er.jpg  contenente il diagramma ER richiesto.

Come da richiesta è stato usato Laravel version 9.0

Migrations: Nella cartella gest_tecnasoft/database/migrations troverete le seguenti migrations:
<ul>
<li>services_table relativa alla sezione Servizi Medici </li>
	<li>points_table relativa alla sezione dei Points</li>
	<li>price_lists_table relativa alle gestione prezzi e Attivazione/Disattivazione dei singoli Servizi abbinati al singolo Point.</li>
	<li>sales_table relativa alla sezione Storico Vendite Articoli.</li>
</ul>
Models: Nella cartella gest_tecnasoft/app/Models troverete i models richiesti per lo svolgimento della prova.
        Ho deciso di utilizzare i setAttribute per dimostrarne la conoscenza e per creare uniformità nel testo inserito.

Controllers:  Nella cartella gest_tecnasoft/app/Http/Controllers troverete i controllers richiesti per lo svolgimento della prova. 
		      In ogni metodo trovare i commenti IN e OUT dove vengono specificati i parametri in ingresso ed uscita.
		      Ho preferito scrivere il codice per meglio dimostrare le scelte fatte per il miglior funzionamento della prova tecnica.
              L'uso del metodo updateOrCreate è stato scelto rispetto al metodo Create per evitare possibili ridondanze nei Servizi e Point inseriti. 
		    - PointController CRUD relativo alla sezione Points
		    - ServiceController CRUD relativo alla sezione Servizi
		    - PriceListController CRUD relativo alla gestione dei singoli servizi abbinati ai singoli Points. 
          	    Il metodo statusPriceList() è il metodo richiesto per l’attivazione/disattivazione del servizio abbinato al Point. 		     
                E’ stato fatto uso delle sessioni solo per dimostrarne la conoscenza ed uno dei possibili usi.
		    - SaleController è un controller invoke relativo allo storico delle singole vendite.



 

