<p align="center"><img src="https://github.com/Moonlight404/Relativy-Framework/blob/master/img/logo_2.png?raw=true" width="400"></p>

## Sobre Relativy

O Relativy é uma estrutura de aplicativos da web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa para ser verdadeiramente gratificante. O Relativy elimina as dificuldades do desenvolvimento, facilitando tarefas comuns usadas em muitos projetos da web, como:

- [Facil, e rapidas rotas]

## Como executar o Relativy
- Execute o comando `composer create-project relativy/relativy`
- Excute o comando cd relativy
- Configure no env.json
- Execute o comando `php server` na pasta raiz do Relativy

### Duvida sobre OS no env.json
Existem 2 tipos, windows e linux

## Comandos 
- Execute `php make` na pasta raiz do Relativy

### Como faço pra criar uma View?

Se pode fazer por 3 maneiras:
- 1 - Criando o view direto nas pasta /views, por exemplo:
      Nome da minha view vai ser HelloWorld, então eu crio helloWorld dentro da pasta /views,
      Pra acessar ela, eu irei em http://localhost:$porta/helloWorld
- 2 - Use o comando php make, e selecione `Criar uma rota`, passe a rota
- 3 - Se pode criar uma pasta dentro /views por exemplo /HelloWorld, e depois criar um arquivo index.php dentro da pasta HelloWorld
      Para acessar seria http://localhost:$porta/helloWorld

### Como colocar framework CSS?
Existem 2 tipos de framework já integrada;
- bootstrap
- bulma
Se pode editar no env.json, em framework

### Como faço pra por em uma página minha o framework CSS?
- Vai em alguma view e coloque `<?php css();?>` para CSS
-Vai em alguma view e coloque `<?php js();?>` para JS, tente colocar antes de fechar o body

## Contribuindo

Obrigado por considerar contribuir com o framework Relativy!

## License

The Relativy framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

