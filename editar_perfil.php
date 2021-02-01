<div id="container_editar">
    <h1>EDITAR PERFIL</h1>    
    <form id="editar_perfil" action="">
        <fieldset id="editar_item1">
            <table width="80%" border="0" cellspacing="20" cellpadding="15">
                <tr>
                    
                        <td><img src="skin/img/profile.png" style="margin-left:30px;cursor:pointer; width:150%;margin: 0% auto;"/></td>
        
                        <td style="font-size: 2rem;font-weight: bold;font-style: italic;">CLAUDIO RICARDO ALMEIDA
                    
                        <div colspan="2" style="text-align: initial;width: 180%;font-size: 1.5rem;font-weight: bold;">GERENTE</div>
                    
                        </td>
                </tr>
                <!-- <tr>
                    <td style="display:inline-block">
                        <img src="skin/img/profile.png" style="margin-left:30px;cursor:pointer; width:100%"/>
                    </td>
                    <tr class="editar_nome">
                        <td style="display: block;margin: -30% 30%;width: 60%; text-align:start">CLAUDIO RICARDO ALMEIDA</td>
                    </tr>
                    <tr class="editar_nome">
                        <td>GERENTE</td>
                    </tr>
                </tr> -->
            </table>
        </fieldset>
        <fieldset id="editar_item2">
            <table width="100%" border="0" cellspacing="10" cellpadding="10">
                <tr>
                    <label for="name">NOME COMPLETO</label>    
                    <input type="text" name="name" id="" style="background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 1%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%">
                </tr>
                <tr>
                    <label for="" style="margin-top: 10%;">GÊNERO</label>
                    <select name="" id="" style="background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 1%;display: block;width: 58%;margin-top: 1%;">
                        <option value=""></option>
                        <option value=""style="color: white; font-weight:bold">MASCULINO</option>
                        <option value=""style="color: white;font-weight:bold">FEMININO</option>
                        <option value=""style="color: white;font-weight:bold">LGBTQ+</option>
                    </select>
                </tr>
                <tr>
                    <td>
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" onkeyup="mascara(this, mcpf);" style="color:white;background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                    <td>
                        <label for="">DATA DE NASCIMENTO</label>
                        <input type="data" name="data" id="data" onkeyup="mascara(this, mdate);" style="color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="email">E-MAIL</label>
                        <input type="text" name="email" id="email" style="color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">TELEFONE</label>
                        <input type="tel" name="tel " id="tel"maxlength="15" onkeyup="mascara(this, mtel);" name="telefone" id="telefone" style=" color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                    <td>
                        <label for="">CELULAR</label>
                        <input type="tel" name="cel" id="cel" maxlength="15" onkeyup="mascara(this, mtel);" name="telefone" id="telefone" style=" color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">SENHA</label>
                        <input type="password" name="" id=""  style=" color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                    <td>
                        <label for="">CONFIRMAR SENHA</label>
                        <input type="password" name="" id="" style=" color:white; background-color: rgb(27,172,188);border: solid 1px white;border-radius: 20px;padding: 2%;display: block;width: 78%;margin-top: 1%;margin-bottom:2%;margin-left: -6%;">
                    </td>
                </tr>
            </table>    
        </fieldset>
        <button id="btn_editar">ATUALIZAR</button>
    </form>

</div>
