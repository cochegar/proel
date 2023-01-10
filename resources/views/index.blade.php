@extends('layouts.app')
@section('title-block','proel.ru')
@section('content')
@include('inc.slider')
@show
<div class="row">
    <div class="col-12">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Продукция</h3></div>
            <div class="wrp-a">
                <a href="">ОВОД-МД</a>
                <a href="">ОВОД-Л</a>
                <a href="">ОВОД-МИНИ</a>
                <a href="">ШДЗ</a>
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <div class="main-item justify-content-center ">
            <div class="row"><h3>Преобразователи интерфейсов</h3></div>
            <div class="wrp-a">
                <a class="w-pad" href="">ПРОЭЛ-ИНТЕРФЕЙС<br>USB-RS232</a>
                <a class="w-pad" href="">ПРОЭЛ-ИНТЕРФЕЙС<br>USB-RS485</a>
            </div>
        </div>
    </div>     
</div>
<div class="row">
    <div class="col-12 ">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Прочая продукция</h3></div>
            <div class="wrp-a">
                <a href="">ОПТИЧЕСКИЙ ТЕСТЕР</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Проектирование</h3></div>
            <div class="row item-inner">
                <div class="col-6">
                    <p>Наша компания выполняет проектно-изыскательские работы по применению наших устройств на строящихся и существующих энергообъектах, начиная от БКРТП районного значения и заканчивая атомными ледоколами и АЭС.</p> 
                    <p>В ходе проектирования наши специалисты внимательно изучают требования Заказчика, особенности энергообъекта и подготавливают техническое решение, оптимальное, как с инженерной так и с экономической точки зрения.</p>
                    <img src="/images/item1.png">
                </div>
                <div class="col-6">
                    <h4>Наши возможности:</h4>
                    <ul>
                        <li>предпроектное обследование энергообъекта с выездом специалиста на место;</li>
                        <li>разработка и согласование с Заказчиком проектной документации на модернизацию, техническое перевооружение или строительство в части обеспечения распределительных устройств дуговой защитой с проведением метрологической экспертизы;</li>
                        <li>разработка и согласование с Заказчиком рабочей документации на модернизацию, техническое перевооружение или строительство в части обеспечения распределительных устройств дуговой защитой с проведением метрологической экспертизы;</li>
                        <li>разработка и согласование конструкторской документации на изготовление шкафов дуговой защиты нестандартного исполнения. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Монтаж и пусконаладка</h3></div>
            <div class="row item-inner">
                <div class="col-6">
                Наша компания выполняет строительно-монтажные, шеф-монтажные и пусконаладочные работы устройств дуговой защиты на объектах Заказчика. 
                </div>
                <div class="col-6">
                Работы проводят опытные специалисты имеющие IV и V группы по электробезопасности, прошедшие обучение по охране труда, работам на высоте и пр.

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Заказать</h3></div>
            <div class="row item-inner">
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a href="">КАТАЛОГ ПРОДУКЦИИ <br>2020</a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a href="">ОПРОСНЫЙ ЛИСТ <br>ОВОД-МД</a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a href="">ОПРОСНЫЙ ЛИСТ <br>ОВОД-Л</a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a href="">ОПРОСНЫЙ ЛИСТ <br>ПРОЭЛ-МИНИ</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="wrp-send-us">
                    <div class=" send-us">Напишите нам</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12 ">
        <div class="main-item justify-content-center">
            <div class="row"><h3>Поддержка</h3></div>
            <div class="row ">
                <div class="main-inner-text">
                    Наше предприятие осуществляет гарантийное и послегарантийное обслуживание устройств дуговой защиты:
                </div>
            </div>
            <div class="row ">
                <div class="wrp-a">
                    <a class="prod" href="">ОВОД</a>
                    <a class="prod" href="">ОВОД-М</a>
                    <a class="prod" href="">ОВОД-МД</a>
                    <a class="prod" href="">ОВОД-Л</a>
                    <a class="prod" href="">ПРОЭЛ-МИНИ</a>
                    
                </div>
            </div>
                        
            <div class="row item-inner">
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a class="tech" href="">ТЕХНИЧЕСКАЯ <br>ДОКУМЕНТАЦИЯ </a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a class="prog"  href="">ПРОГРАМНОЕ  <br>ОБЕСПЕЧЕНИЕ</a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a class="serv"  ref="">СЕРВИС</a>
                    </div>
                </div>
                <div class="col-3 bg-pict">
                    <div class="wrp-a">
                        <a class="warant"  href="">ГАРАНТИЙНОЕ И <br>ПОСЛЕГАРАНТИЙНОЕ<br>ОБСЛУЖИВАНИЕ </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wrp-main-inner-text">
                    <div class="main-inner-text consult col-8">
                    Получить подробную информацию, консультацию можно получить у специалиста нашего предприятия <br>по телефону (812) 3631-50-33 (34) доб. 401.        
                    </div>
                </div>
            </div>
            

            <div class="row ">
                <div class="wrp-send-us">
                    <div class=" send-us">Напишите нам</div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 ">
            <div class="main-item justify-content-center"><h3>Контакты</h3></div>
        </div>
    </div>
@endsection





