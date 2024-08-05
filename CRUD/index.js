const miniTwitter = {
    usuarios: 
    [
        {
            username: 'mthrlf',
        }
    ],
    posts: 
        [
            {   
                id:1,
                owner: 'mthrfl',
                content:'priemiro tweet',
            }
        ],

};
//Create
function criapost(dados){
    miniTwitter.posts.push({
        id : miniTwitter.posts.length + 1,
        owner: dados.owner,
        content: dados.content
        
    });
}
criapost({owner: 'mthrfl', content: "segundo tweet"})
//console.log(miniTwitter.posts)

//Ler
function pegaPost(){
    return miniTwitter.posts
}
console.log(pegaPost())

//update
function atualizaContentdoPost(id,novoConteudo)
{
    const postquevaiseratualizado = pegaPost().find((post) => {
        return post.id === id;
    })
    console.log(postquevaiseratualizado)
    postquevaiseratualizado.content = novoConteudo
}
atualizaContentdoPost(2, 'novo conteudo do post')
console.log(pegaPost())

//DElete
function apagaPost(id){
    const listaDePostAtualizada =pegaPost().filter((postAtual) => {
        return postAtual.id !== id
    })
    miniTwitter.posts = listaDePostAtualizada
    
}
apagaPost(2)
console.log(pegaPost())