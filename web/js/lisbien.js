$(document).ready(function() {
 

    $("#table").dataTable({
      language: {
        processing: "Traitement en cours...",
        search: "Rechercher&nbsp;:",
        lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
        info:
          "Affichage de l'&eacute;lement_START_ &agrave;_END_ sur _TOTAL_ & eacute;l&eacute;ments ",
        infoEmpty:
          "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute; l&eacute;ments ",
        infoFiltered:
          "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix: "",
        loadingRecords: "Chargement en cours...",
        zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher ",
        emptyTable: "Aucune donnée disponible dans le tableau",
        paginate: {
          first: "Premier",
          previous: "Pr&eacute;c&eacute;dent",
          next: "Suivant",
          last: "Dernier"
        },
        aria: {
          sortAscending:
            ": activer pour trier la colonne par ordre croissant ",
          sortDescending:
            ": activer pour trier la colonne par ordre décroissant "
        }
      }
    });



 /**
 * I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
 * but will likely encounter performance issues on larger tables.
 *
 *      <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
 *      $(input-element).filterTable()
 *      
 *  The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
 */
 (function() {
 'use strict';
 var $ = jQuery;
 $.fn.extend({
 filterTable: function() {
 return this.each(function() {
 $(this).on('keyup', function(e) {
 $('.filterTable_no_results').remove();
 var $this = $(this),
 search = $this.val().toLowerCase(),
 target = $this.attr('data-filters'),
 $target = $(target),
 $rows = $target.find('tbody tr');

 if (search == '') {
 $rows.show();
 } else {
 $rows.each(function() {
 var $this = $(this);
 $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
 })
 if ($target.find('tbody tr:visible').size() === 0) {
 var col_count = $target.find('tr').first().find('td').size();
 var no_results = $('<tr class="filterTable_no_results"><td colspan="' + col_count + '">No results found</td></tr>')
 $target.find('tbody').append(no_results);
 }
 }
 });
 });
 }
 });
 $('[data-action="filter"]').filterTable();
 })(jQuery);

 $(function() {
 // attach table filter plugin to inputs
 $('[data-action="filter"]').filterTable();

 $('.container').on('click', '.panel-heading span.filter', function(e) {
 var $this = $(this),
 $panel = $this.parents('.panel');

 $panel.find('.panel-body').slideToggle();
 if ($this.css('display') != 'none') {
 $panel.find('.panel-body input').focus();
 }
 });
 $('[data-toggle="tooltip"]').tooltip();
 })
    
    
});