$(document).ready(() => {

    // Função que consegue TODOS os dados da API
    const getFilmes = () => {
        $.get('http://localhost/search/api/', req => {
            req.forEach(filme => {
                $('#ulGroup').append(render(filme.nome));
            });   
        });
    }

    getFilmes();

    // Função que consegue os dados específicos da API
    const postFilmes = (info) => {
        $.post(`http://localhost/search/api/${info}`, req => {
            req.forEach(filme => {
                $('#ulGroup').append(render(filme.nome));
            });
        });
    }

    // Função de renderização dos Itens da lista.
    const render = data => {
        return `<li class="list-group-item" id="liInfo">${data}</li>`;
    }

    // Função princial ($timeSearch) onde
    // torna possível a busca por caracteres.
    let time = null;
    const $timeSearch = event => {
        clearTimeout(time);

        $('ul').text('');
        time = setTimeout(() => {
            postFilmes(event.target.value);
            if($('#search').val() == '') {
                getFilmes();
            }
        }, 1000);
    }

    $('#search').keyup($timeSearch);
});