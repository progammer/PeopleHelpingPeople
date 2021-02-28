import 'package:flutter/material.dart';

import 'oppurtunities.dart';
import 'info.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  Widget build(BuildContext context) {
    return MaterialApp(
      home: NewApp(),
    );
  }
}

class NewApp extends StatelessWidget {
  const NewApp({
    Key key,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    var container = Container(
      decoration: BoxDecoration(
          gradient: LinearGradient(
        colors: [
          const Color(0xFF3366FF),
          const Color(0xFF00CCFF),
        ],
        stops: [0.0, 1.0],
      )),
      child: buildFlatButton(context),
    );
    return Scaffold(
        appBar: AppBar(
          title: Center(child: Text("People Helping People")),
          backgroundColor: Color(0xFF00CCFF),
        ),
        body: Center(
            child: Column(children: <Widget>[
          Padding(padding: EdgeInsets.all(30.0)),
          Container(
            decoration: BoxDecoration(
                gradient: LinearGradient(
              colors: [
                const Color(0xFF3366FF),
                const Color(0xFF00CCFF),
              ],
              stops: [0.0, 1.0],
            )),
            child: FlatButton(
              shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(18.0)),
              padding: EdgeInsets.symmetric(vertical: 80.0, horizontal: 50.0),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => CoolApp()),
                );
              },
              child: Text("See Opportunities",
                  style: Theme.of(context)
                      .textTheme
                      .headline6
                      .copyWith(color: Colors.white)),
            ),
          ),
          Padding(padding: EdgeInsets.all(50.0)),
          container,
        ])));
  }

  FlatButton buildFlatButton(BuildContext context) {
    return FlatButton(
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(18.0)),
      padding: EdgeInsets.symmetric(vertical: 80.0, horizontal: 88.0),
      onPressed: () {
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => InfoApp()),
        );
      },
      child: Text("About Us",
          style: Theme.of(context)
              .textTheme
              .headline6
              .copyWith(color: Colors.white)),
    );
  }
}
