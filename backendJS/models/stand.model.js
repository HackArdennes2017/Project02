'use strict';

const Sequelize = require('sequelize');

const model = {
  standId: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
  name: Sequelize.STRING,
  description: Sequelize.STRING,
  GPSlongitude: Sequelize.STRING,
  GPSlatitude: Sequelize.STRING,
  badgeLink: Sequelize.STRING,
  planId: Sequelize.INTEGER
};

module.exports.model = model;
