function cree_tableau_js(donne1,donne2,donne3)
{
     Chart.defaults.global.legend.display = false;

      var canvas_id = document.getElementById("AdminGraph");
      var AdminGraph = new Chart(canvas_id, {
          type: 'bar',
          data: {
              labels: ["Clients", "Dossiers en cours", "Dossiers classés"],
              datasets: [{
                  label: false,
                  data: [donne1, donne2, donne3],
                  backgroundColor: ["blue", "lightgray", "gray"],
              }]
          }
      });
 }
