document.addEventListener("DOMContentLoaded", function () {
  let select = document.getElementById("filtro");
  let pesquisa = document.getElementById("pesquisa");
  let botaoPesquisar = document.querySelector(".btn-pesquisa");

  if (botaoPesquisar) {
    botaoPesquisar.addEventListener("click", filtro);
  } else {
    console.error("Elemento com classe 'btn-pesquisa' não encontrado.");
  }

  function filtro() {
    var op = select.options[select.selectedIndex].value;

    if (pesquisa.value != "") {
      switch (op) {
        case "nome": ///caso seja um fitro em NOME
          if (
            typeof pesquisa.value === "string" &&
            !Number.isInteger(parseInt(pesquisa.value))
          ) {
            alert(`Buscando o  valor "${pesquisa.value}`);
            pesquisa.value = "";
          } else {
            alert(`O valor "${pesquisa.value}" não é do tipo ${op}`);
            pesquisa.value = "";
          }
          break;

        case "Institução": /// caso seja um filtro em Instituição
          if (
            typeof pesquisa.value === "string" &&
            !Number.isInteger(parseInt(pesquisa.value))
          ) {
            alert(`Buscando o  valor "${pesquisa.value}`);
            pesquisa.value = "";
          } else {
            alert(`O valor "${pesquisa.value}" não é do tipo ${op}`);
            pesquisa.value = "";
          }
          break;

        case "CPF": /// caso seja um fitro em CPF
          var checkInt = parseInt(pesquisa.value); // tenta converter para número

          if (!isNaN(checkInt)) {
            alert(`Buscando o valor "${pesquisa.value}`);
            pesquisa.value = "";
          } else {
            alert(`O valor "${pesquisa.value}" não é um número do tipo ${op}`);
            pesquisa.value = "";
          }
          break;

        case "Inscrição": /// caso seja um filtro em Inscrição
          if (
            typeof pesquisa.value === "string" &&
            !Number.isInteger(parseInt(pesquisa.value))
          ) {
            alert(`Buscando o  valor "${pesquisa.value}`);
            pesquisa.value = "";
          } else {
            alert(`O valor "${pesquisa.value}" não é do tipo ${op}`);
            pesquisa.value = "";
          }
          break;

        case "Protocolo": /// caso seja um fitro em PROTOCOLO
          var checkInt = parseInt(pesquisa.value); // tenta converter para número

          if (!isNaN(checkInt)) {
            alert(`Buscando o PROTOCOLO: "${pesquisa.value}`);
            pesquisa.value = "";
          } else {
            alert(`O valor "${pesquisa.value}" não é um número do tipo ${op}`);
            pesquisa.value = "";
          }
          break;

        default:
          alert("Valor não encontrado tente um dos tipos de busca abaixo");
      }
    } else {
      alert("Digite algum valor na barra de pesquisa");
    }
  }
});
