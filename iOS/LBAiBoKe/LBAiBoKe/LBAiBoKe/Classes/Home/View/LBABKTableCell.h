//
//  LBABKTableCell.h
//  LBAiBoKe
//
//  Created by liubo on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <UIKit/UIKit.h>
@class LBABKModel;
@interface LBABKTableCell : UITableViewCell
+ (instancetype)cellWithTableView:(UITableView *)tableView;
@property (nonatomic, strong) LBABKModel *model;
@end
