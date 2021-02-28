import 'package:flutter/material.dart';
import 'package:mysql1/mysql1.dart';

String password = "a7Nkqe7euZ46nvb_!*EC";

class CoolApp extends StatefulWidget {
  @override
  _CoolAppState createState() => _CoolAppState();
}

class _CoolAppState extends State<CoolApp> {
  List<dynamic> ret = [];
  var rowcount = 0;
  var name;
  var settings = new ConnectionSettings(
      host: '34.71.184.13',
      port: 3306,
      user: 'root',
      password: 'a7Nkqe7euZ46nvb_!*EC',
      db: 'hackutddatabase');

  @override
  void initState() {
    _fetchData();
    super.initState();
  }

  Future _fetchData() async {
    final conn = await MySqlConnection.connect(settings);
    final result = await conn.query("SELECT * FROM opportunity;");
    setState(() {
      for (var row in result) {
        rowcount++;
        ret.add(List.of(row));
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        //appBar: AppBar(title: Text("Hello world")),
        body: MaterialApp(
          //title: title,
          home: Scaffold(
            body: GridView.count(
              mainAxisSpacing: 25,
              // Create a grid with 2 columns. If you change the scrollDirection to
              // horizontal, this produces 2 rows.
              crossAxisCount: 2,
              // Generate 100 widgets that display their index in the List.
              children: List.generate(rowcount, (index) {
                return Center(
                  child: SizedBox(
                    height: 250,
                    width: 150,
                    child: Container(
                      decoration: BoxDecoration(
                          //border: Border.all(
                          //color: Colors.black,
                          //),
                          // borderRadius: BorderRadius.all(Radius.circular(20)
                          //),
                          image: DecorationImage(
                              image: NetworkImage(
                                  "https://www.avemaria.edu/wp-content/uploads/2015/04/250x200.gif"),
                              fit: BoxFit.cover)),
                      child: FlatButton(
                          onPressed: () {
                            showDialog(
                              context: context,
                              builder: (context) {
                                return Dialog(
                                    //shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(40)),
                                    elevation: 16,
                                    child: Container(
                                        decoration: BoxDecoration(
                                            gradient: LinearGradient(
                                          colors: [
                                            const Color(0xFF3366FF),
                                            const Color(0xFF00CCFF),
                                          ],
                                          stops: [0.0, 1.0],
                                        )),
                                        height: 400.0,
                                        width: 360.0,
                                        //child: ColoredBox(
                                        //color: Colors.blue,
                                        child: Column(
                                          crossAxisAlignment:
                                              CrossAxisAlignment.start,
                                          children: [
                                            Container(
                                                child: Image.network(
                                              'https://www.avemaria.edu/wp-content/uploads/2015/04/250x200.gif',
                                              fit: BoxFit.contain,
                                              width: 300,
                                            )),
                                            Column(
                                                crossAxisAlignment:
                                                    CrossAxisAlignment.start,
                                                children: [
                                                  Padding(
                                                      padding:
                                                          EdgeInsets.all(10.0)),
                                                  Text(
                                                      '  Job Description: ' +
                                                          ret[index][1],
                                                      style: Theme.of(context)
                                                          .textTheme
                                                          .bodyText1
                                                          .copyWith(
                                                              color: Colors
                                                                  .white)),
                                                  Padding(
                                                      padding:
                                                          EdgeInsets.all(10.0)),
                                                  Text(
                                                      '  Email: ' +
                                                          ret[index][3],
                                                      style: Theme.of(context)
                                                          .textTheme
                                                          .bodyText1
                                                          .copyWith(
                                                              color: Colors
                                                                  .white)),
                                                  Padding(
                                                      padding:
                                                          EdgeInsets.all(10.0)),
                                                  Text(
                                                      '  Phone Number: ' +
                                                          ret[index][2],
                                                      style: Theme.of(context)
                                                          .textTheme
                                                          .bodyText1
                                                          .copyWith(
                                                              color: Colors
                                                                  .white)),
                                                  Padding(
                                                      padding:
                                                          EdgeInsets.all(10.0)),
                                                  Text(
                                                      '  Location: ' +
                                                          ret[index][7] +
                                                          " " +
                                                          ret[index][6] +
                                                          " " +
                                                          ret[index][10] +
                                                          " " +
                                                          ret[index][8] +
                                                          " " +
                                                          ret[index][9],
                                                      style: Theme.of(context)
                                                          .textTheme
                                                          .bodyText1
                                                          .copyWith(
                                                              color: Colors
                                                                  .white)),
                                                ])
                                          ],
                                        ))
                                    // ),
                                    );
                              },
                            );
                          },
                          child: Container(
                              alignment: Alignment.bottomCenter,
                              child: FractionallySizedBox(
                                  widthFactor: 1.27,
                                  heightFactor: .2,
                                  child: ColoredBox(
                                      color: Colors.blue,
                                      child: Center(
                                          child: Text(
                                        ret[index][1],
                                        textAlign: TextAlign.center,
                                      )))))),
                    ),
                  ),
                );
              }),
            ),
          ),
        ),
      ),
    );
  }
}
